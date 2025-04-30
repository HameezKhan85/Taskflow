<link rel="stylesheet" href="<?= ASSETS_M ?>css/quote-form-style.php">
<style>
     #full-screen-loader {
    display: none; /* Initially hidden */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
    justify-content: center;
    align-items: center;
    z-index: 9999;
    display: flex; /* Flexbox to center the loader */
}

.loader {
    border: 6px solid #f3f3f3; /* Light gray border */
    border-top: 6px solid #ee1b24; /* Green color for the spinning part */
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
 </style>
<!-- QUOTE FORM -->
<div class="quote-form" id="quote-form" >
    <div class="title">
          <label>GET CUSTOM QUOTE</label>   
    </div>
    <form method="post" id="quoteForm" enctype="multipart/form-data">
        <label for="productName">
            <span class="number" >1-</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image id="box" width="22" height="22" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAABpUlEQVQ4jaXUzUtWURDH8Y8i0kKRbFG0KEIQgsxCCYRaRBSEEIQQgUkRFBHUIvoTpDYt/AOE6GVTkQqGvS1auIwIMlIhkRZRG7OyXVAxMMZV7n2gpx9czr3nzHzvmTlnpmG5Y78a6sQgDuMF7mK2yrwM1ooBnMDREp9nuI8H+F4FO4STOI5NtbabWsYE7uHpKixCuI0tNRx/YgGPsBlD69aXcCZgnWkQOzuHrSWwT2GcIYb24iIOYByP8TlgrzOxo/iGfbiEUyXQRVzFWGGuLX801Ig9uIGvGcZGnEVLHsLLdHqPW3maTTl3Pv1G0BOwlcJf+vEEX3ANbxEn1I1deIgL2J723QXflcaKhMeuLuNd5uQN7mAm5z+k3ceiU1M5a4168qM3xx/Yjb5Mxz/BlgrjjvR5VWZYFWYtbahaqwdWqYA15GIc+/P/hbXk+zSO4GCdrNaATeZHVMB83rVfdcCmAnYMO3Ed27Jcirn8vW4sag7D6IpNlPWzCDXKKFpRe3aM5qyKKLUon9XWE9XyV2X3LDpDPFdwOgs/OkkAogJuJnCt8AdJi1mHs6m/JQAAAABJRU5ErkJggg=="/>
            </svg>
            Product Information
        </label>
        <input type="text" name="productName" id="productName" placeholder="Product Name" aria-label="Enter Product Name" required>
        <label>
            <span class="number">2-</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image  width="22" height="22" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAB30lEQVQ4ja3UTYhOYRQH8J8xLJSUBUkkH9mQogYZEQsfWdLERj4WEkr5KGVDNoqNJBbEwteCUmQ1FCXKxoqkkTSFBZKhYdDRufW63ft6m5lTT0/Pc8/53///POecER9ndMJEPEA3dhgGa8cUPMYkzMJnHBwqdBt6ErSwA9g9HMB7cTLPL3AIT2r8F2BOK8BFjiMlP3AdXRV+q7EN6/N8AefxsA64PffZuY/NfVTmexU2Y14pbkuuR/mTe3iNn2Xgso3HKaz4j+LFua5gJz4VH9pqAt5hJdbhVo3PQAIuw6ZG0GaMA/QLbueain3Yjv5Uc6IBLMC/Z9k2ZdyVTncyz2+wB9Oy7g8n6IZsrPtY3ghQB9yT+xrcxTPswvtUEsCvsoo60/dtK8AjS+e5KT9sMo5gerOYOuDRFXdfcx+oifnnveqAf1fc/arxrYypq4rTyTAecX7eFc1TZhzddxU3W2Ecj3Q8Z0OU3mX0ZkeOyzo/g0VYmkQq67iQWZWC7lxj0q8367q/5BdtvxDnGhkXpfKtRkFYX6ahrwI0bAnOptK/jI+io+HjtZh6TX5QZaF0Zt7vD3UxNqvkD9mC8YTssIt4iY2DZLw1J1ykqiOAP+ASjuEGng6SbsyQILgWz/8ALx5pcfxQH8QAAAAASUVORK5CYII="/>
            </svg>
            Select Sizes
        </label>
        <div class="group">
            <input type="text" name="depth" id="depth" placeholder="Select Size" aria-label="Size" required>
            <select aria-label="Select Unit" name="unit" >
                <option value="" selected disabled>Select Unit</option>
                <option value="cm">ml</option>
                <option value="inch">oz</option>
            </select>
		</div>
        <label for="materials">
            <span class="number">3-</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image  width="22" height="22" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAPCAYAAAALWoRrAAABqklEQVQ4jZXUP0iVYRQG8J/9k4igCCOpITSIaMgiiCiwQBqMJkEjaihqKigqGlwaxK0xG1psibhbIQ5SQkEhlmAQRUR/aCqCsugP2aBx4Fz4vNx71QMfH9/7nfO8z3me874NU637zRN7sQ9tGMXgfAXLqqytRTd2YBOWYgrv0Y8PeLgY0C5cwku8wS08Lfwfx21sXAzoOvzDmRr5wyhhArtrgS6p+L6JX+itQ+QiXuMttiwENOIITqQ5teI4bmAk31uLedXcb8RRXEVnsqoVq9CHlsybwY8i0xD/Gv7iSiaHUQfrgP5OOaKzXWnytjLT6zhbUTCWm5zCO5yvAtqW49eEzbiLgTJoBy7gcEXRR1yO3bOTL3iQU3MIzdl6Kef4a4xdpaatmdyD9sL6PTzDeizHhtSzlBJsTz334FE1o3ammz+zONo6kDP8BK/wOf81JutzCRrzO1ge/gA6idNYmWvfY1c8x500MNgFeLBbnTp/yvsgDsbjKAymAziGNfiT5zwiwOMeaCh0MY1vmM1jfB9DeFFsNZiuyJMU7daLGL94AjgMmUyd5wb+A8BGX9DNQmqjAAAAAElFTkSuQmCC"/>
            </svg>
            Choose Materials
        </label>
        <div class="group">
            <select name="stocks" id="stocks" aria-label="Select Stock" required>
                <option value="" selected disabled>Stock</option>
                <option value="12gsm">12gsm</option>
                <option value="14gsm">14gsm</option>
                <option value="16gsm">16gsm</option>
                <option value="18gsm">18gsm</option>
                <option value="20gsm">20gsm</option>
                <option value="22gsm">22gsm</option>
                <option value="24gsm">24gsm</option>
                <option value="Cardboard Stock">Cardboard Stock</option>
                <option value="Corrugated Stock">Corrugated Stock</option>
                <option value="Kraft Stock">Kraft Stock</option>
                <option value="Other">Other</option>
            </select>
            <select name="colors" aria-label="Select Color" required>
                <option value=" " selected disabled>Select Color</option>
                <option value="1 Color">1 Color</option>
                <option value="2 Color">2 Color</option>
                <option value="3 Color">3 Color</option>
                <option value="4 Color">4 Color</option>
                <option value="4/1 Color">4/1 Color</option>
                <option value="4/2 Color">4/2 Color</option>
                <option value="4/3 Color">4/3 Color</option>
                <option value="4/4 Color">4/4 Color</option>
            </select>
            <input type="number" name="quantity" id="quantity" placeholder="Quantity" aria-label="Quantity" required>
        </div>
        <label for="artwork">
            <span class="number">4-</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image id="image" width="22" height="22" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAARCAYAAAA/mJfHAAABgElEQVQ4jZ3UvUuXURQH8I8/i6wkSZSs1UEjAqHJMImWIEiXoCUjwUmiXXCsxhb/AcNFEokSoi2SWpuiaNPBCiJSKQpKjAPnJ5fHd79wufeee873Oa9Pw4/OPgXO4wm67Q/LGKmSfUyix/iEBpzCyW2o13O/iSOHKo9B9AF3cAMdeLgHH39itEq2mh5dxUzKruXaCc3xVqsoRFiH8aeQLVd02vAK04UsbFQ9+4ezeI1hrGGqovMGXXn+iyF8L8l68Tm9OJqyydyP41eenxdEgVt4iqUyzEG0pie/UzaQ1fqGc7iL61vkbRb3IjXhWVMmfCLJF3ARz1I5PH2/c/6dxkoYX0EPvmIRF/B2F+Ot0FgrXI8QG9FyAKJAcy1zU8eLAxIF3kXOzuRlHPezMnudzShQe/blg5jNsWJkXiLuX1JhfReyaPKVjUsOemdW9HY27Yl9hBdpmivJSkTo0RqXcSkbOhp3O8QoxeRsGqdAPMznChxDfLE/yeOfV7d7VCeC///oS1NqGYLOAAAAAElFTkSuQmCC"/>
            </svg>
            Upload Artwork
        </label>
        <input type="file" name="attachment" id="attachment" aria-label="Upload Artwork">
        <label for="personalInfo">
            <span class="number">5-</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image width="22" height="22"  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAUCAYAAACEYr13AAABHUlEQVQ4jaXUsSuFURjH8Y/bNdxBMlAWy10MyqKkCJOSVYmkZLMZyKgMRqOUktFiEmUxKmVSNyb/wc1guBh06qi3t/Pe+3bvr85wzvM83/Oc5/319jXrsxKawCEWUMM7LnGWT60miufxmDubjmsOG9lAJZc4iIdUS1Hr2G0H2ER/G0DQfjvAZIfioDEMFQFaJQC/+C4C3JUAPOOrCHCLpw6AvewmDwiaKejkB0v5C/I+WIzvW8YUVuOnfcF5zFnBB16zgFHcRLME3WMLBxl4uP0KI3F/gZ1/Kzcwnmj7DU3UMZyInwRAaPM6ESylMMS1bovDvCoFrZdVqxIH2LUCYKBXwGcP9bUAOO4BUA1GOo3/gO04j5S98wq2buDoD8y9LEmASlP1AAAAAElFTkSuQmCC"/>
            </svg>
            Personal Information
        </label>
        <div class="group">
            <input type="text" name="fname" id="fname" placeholder="Full Name*"  aria-label="Enter Full Name"required>
            <input type="email" name="email" id="email" placeholder="Email ID*"  aria-label="Enter Email ID"required>
            <input type="number" name="cNumber" id="cNumber" placeholder="Contact Number" aria-label="Enter Contact Number"required>
        </div>
        <label for="addInfo">
            <span class="number">6-</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image   width="22"  height="22" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAA60lEQVQokaXRIUtDURjG8d+9DARhICsGBUGDqB/AIjIFzQYxDAYGQaPVbl+2KBj1MwyHBotmtVgMBoMMYUVQOXAGl3H13s2nHHjf5/2f55w3eZ9bgTPU8Ka8JpBgr4JJnOJ6CEBfDfRSPOMzUm9KDj9k/E8BMo5bNLGKkwLAJRaxjhfMBEg3Ns/RwgH2fwEcYSee7Vjrhj9JM6ZDLGETd7jP9NbQiUm2M/W0knPbRoy5gDFcYDcmfsT84ECaAwmaxgeWsYVZfOUB/oL0FdZ+NfCsoSFB9SJDGUihAqT6T0Y1bOcYU/geAZDg9QcBdyY5q+XZaAAAAABJRU5ErkJggg=="/>
            </svg>
            Additional Information
        </label>
        <textarea name="message" id="message" placeholder="Message...?" aria-label="Type Additional Message"></textarea>
        <div class="group">
        <label for="captcha">Captcha <span id="captcha-question"></span> =</label>
        <input type="text" name="captcha" id="captcha" placeholder="Answer" >
        <span id="captcha-error" class="error-message"></span>
            <button type="submit" class="custom__btn" name="quote_form_subbtn" id="submitBtn" aria-label="Submit Button">Submit</button>
        </div>
    </form>
</div>
<div style="display: none!important;" id="full-screen-loader">
       <div class="loader"></div>
    </div>
<script>
var num1 = Math.floor(Math.random() * 10) + 1;
var num2 = Math.floor(Math.random() * 10) + 1;
var captchaQuestion = num1 + ' + ' + num2;
var captchaAnswer = num1 + num2;
document.getElementById('captcha-question').innerText = captchaQuestion;
document.getElementById("quoteForm").addEventListener("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    document.getElementById("captcha-error").innerHTML = '';
    var userAnswer = document.getElementById('captcha').value;
    if (parseInt(userAnswer) !== captchaAnswer) {
        document.getElementById("captcha-error").innerHTML = "Incorrect CAPTCHA answer!";
        document.getElementById("full-screen-loader").style.display = "none";
        return; 
    }
    document.getElementById("full-screen-loader").style.display = "flex";

    fetch('<?= URL . "submitQuoteForm/" ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("full-screen-loader").style.display = "none";
        if (data.success) {
            setTimeout(() => {
                document.getElementById("quoteForm").reset();
                window.location.href = '<?= URL . "thank-you/" ?>';
            }, 500);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById("full-screen-loader").style.display = "none";
    });
});

</script>