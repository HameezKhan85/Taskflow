import './globals.css';
import '@/styles/theme/theme.min.css';
import Head from 'next/head';
import Script from 'next/script'
import Header from '@/components/shared/Header';
import Footer from '@/components/shared/Footer';

export const metadata = {
  title: 'Phoenix',
  icons: {
    icon: [
      { url: '/assets/img/favicons/favicon-32x32.png' },
      { url: '/assets/img/favicons/favicon-16x16.png' },
      { url: '/assets/img/favicons/favicon.ico' },
    ],
  },
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <Head>
        <link href="/assets/vendors/simplebar/simplebar.min.css" rel="stylesheet" />
        <link href="/assets/vendors/leaflet/leaflet.css" rel="stylesheet" />
        <link href="/assets/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet" />
        <link href="/assets/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet" />
      </Head>
      <body>
        <Header />
        {children}
        <Footer />
        <Script src="/assets/vendors/simplebar/simplebar.min.js" />
        <Script src="/assets/vendors/popper/popper.min.js" />
        <Script src="/assets/vendors/bootstrap/bootstrap.min.js" />
        <Script src="/assets/vendors/anchorjs/anchor.min.js" />
        <Script src="/assets/vendors/is/is.min.js" />
        <Script src="/assets/vendors/fontawesome/all.min.js" />
        <Script src="/assets/vendors/lodash/lodash.min.js" />
        <Script src="/assets/vendors/list.js/list.min.js" />
        <Script src="/assets/vendors/feather-icons/feather.min.js" />
        <Script src="/assets/vendors/dayjs/dayjs.min.js" />
        <Script src="/assets/vendors/leaflet/leaflet.js" />
        <Script src="/assets/vendors/leaflet.markercluster/leaflet.markercluster.js" />
        <Script src="/assets/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js" />
        <Script src="/assets/js/phoenix.js" />
        <Script src="/assets/js/config.js" />
        <Script src="/assets/vendors/echarts/echarts.min.js" />
        <Script src="/assets/js/dashboards/ecommerce-dashboard.js" />
      </body>
    </html>
  );
}