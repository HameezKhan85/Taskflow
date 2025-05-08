<?php 

use Config\Services;
use CodeIgniter\CodeIgniter;
function ci_version(): string
{
    return CodeIgniter::CI_VERSION;
}
if (!function_exists('get_login_user_data')) {
  function get_login_user_data(){
    $session = Services::session();
    $userId = $session->get('userid');

    if ($userId) {
        $db = \Config\Database::connect();
        $builder = $db->table('users'); 
        return $builder->where('userid', $userId)->get()->getRow();
    }

    return null;
}
 }

 if(!function_exists('siteSettings')){
    function siteSettings(){
    $session = Services::session();
    $db = \Config\Database::connect();
    $builder = $db->table('site_setting'); 
    $settings = $builder->get()->getRow();
    if($settings){
        return $settings;
    }else{
        return '';
    }
    }
 }
 if (!function_exists('url_redirections')) {
    function url_redirections() {
        
        $db = \Config\Database::connect();
        $currentUrl = ($_SERVER['HTTPS'] ?? 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
       
        $redirection = $db->table('redirections')
            ->where('old_url', $currentUrl)
            ->where('status', 1)
            ->where('deleted_by <=', 0)
            ->get()
            ->getRowArray();
          
        if ($redirection) {
            $newURL = $redirection['new_url'];
            $type = $redirection['type'];
            switch ($type) {
                case 301:
                header("Location: {$newURL}", true, 301);
                exit; 
                case 404:
                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                    case 410:
                        $response = service('response');
                        $response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
                        $response->setHeader('Expires', '0'); // Set an immediate expiry time
                        $response->setHeader('Pragma', 'no-cache'); // For older browsers
                        $response->setStatusCode(410, 'Gone');
                        echo 'The requested resource is no longer available.';
                        $response->send(); // Ensure the response is sent immediately
                    exit;
                        
            }
        }
     
    }
}
function get_email_config() {
    $email = \Config\Services::email();
    $config = [
        'protocol'  => 'smtp',
        'SMTPHost'  => 'smtp.gmail.com',
        'SMTPUser'  => 'umairrao.emenac@gmail.com', // Your email
        'SMTPPass'  => 'gazl crgd iwgt moej',       // Your app-specific password
        'SMTPPort'  => 587,
        'SMTPCrypto' => 'tls',
        'mailType'  => 'html',
        'charset'   => 'utf-8',
        'wordWrap'  => true
    ];
    $email->initialize($config);
    return $email;
}
function send_email_to_admin($to, $masg, $attachment = '') {
    $email = get_email_config();  // Get the email service with config
    $adminEmail = 'umairrao.emenac@gmail.com';  // Admin email

    $email->setFrom('umairrao.emenac@gmail.com', 'Emenac Packaging NZ');
    $email->setTo($adminEmail);
    $email->setReplyTo($to);
    $email->setSubject('New Inquiry Received');
    $email->setMessage($masg);
    
    if ($attachment && is_string($attachment)) {
        $email->attach($attachment);  // Attach the file if it's a valid file path
    }

    if (!$email->send()) {
        log_message('error', 'Email sending failed: ' . $email->printDebugger());
        return false;
    }

    return true;
}
function send_email_to_user($to, $masg, $attachment = '') {
    $email = get_email_config();  // Get the email service with config

    $email->setFrom('umairrao.emenac@gmail.com', 'Emenac Packaging NZ');
    $email->setTo($to);  // User's email
    $email->setSubject('Thank You for Your Inquiry');
    $email->setMessage($masg);
    
    if ($attachment && is_string($attachment)) {
        $email->attach($attachment);  // Attach the file if it's a valid file path
    }

    if (!$email->send()) {
        log_message('error', 'Email sending failed: ' . $email->printDebugger());
        return false;
    }

    return true;
}


function generate_meta_data($pages_data) {
 
    // Default values
    $title = isset($pages_data['meta_title']) && strlen(trim($pages_data['meta_title'])) > 0 
        ? trim($pages_data['meta_title']) 
        : 'Emenac Packaging NZ | Create Custom Printed Boxes &amp; Custom Packaging Solutions Wholesale';
    $current_url = current_url();
    $desc = isset($pages_data['meta_description']) ? trim($pages_data['meta_description']) : '';
    $image = ASSETS . 'gallery_images/' . '';
    $site_schema = $pages_data['site_schema'] ?? '';
    $keyword = isset($pages_data['keyword']) ? trim($pages_data['keyword']) : '';
    $url = str_replace('/index.php', '', $current_url);
    // Handle pagination URLs
    if (strpos($url, 'page') !== false) {
        $position = strpos($url, '/page');
        $clean_url = substr($url, 0, $position);
        $uri = $clean_url . '/';
    } else {
        $uri = $url;
    }
    // Schema script
    if (!empty($site_schema)) {
        $view_site_schema = '<script type="application/ld+json">' . $site_schema . '</script>' . "\r\n";
    } else {
        $view_site_schema = '';
    }
    // Final title
    $finaltitle = trim($title);
    // Meta tags
    $meta = '<title>' . $finaltitle . '</title>' . "\r\n";
    $meta .= '<meta name="description" content="' . trim($desc) . '">' . "\r\n";
    $meta .= '<meta name="keyword" content="' . trim($keyword) . '">' . "\r\n";
    $meta .= '<link rel="canonical" href="' . $uri . '">' . "\r\n";
    $meta .= '<meta property="og:locale" content="en_US">' . "\r\n";
    $meta .= '<meta property="og:type" content="website">' . "\r\n";
    $meta .= '<meta property="og:title" content="' . $finaltitle . '">' . "\r\n";
    $meta .= '<meta property="og:description" content="' . trim($desc) . '">' . "\r\n";
    $meta .= '<meta property="og:url" content="' . $uri . '">' . "\r\n";
    $meta .= '<meta property="og:site_name" content="ecallcenterservices">' . "\r\n";
    $meta .= '<meta property="og:image" content="' . $image . '">' . "\r\n";
    $meta .= '<meta name="twitter:card" content="' . trim($desc) . '">' . "\r\n";
    $meta .= '<meta name="twitter:site" content="' . URL . '">' . "\r\n";
    $meta .= '<meta name="twitter:title" content="' . $finaltitle . '">' . "\r\n";
    $meta .= '<meta name="twitter:description" content="' . trim($desc) . '"> ' . "\r\n";
    $meta .= '<meta name="twitter:image" content="' . $image . '">' . "\r\n";
    $meta .= $view_site_schema;
    return $meta;
}
