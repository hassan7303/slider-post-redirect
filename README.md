[contributors-shield]: https://img.shields.io/github/contributors/hassan7303/slider-post-redirect.svg?style=for-the-badge
[contributors-url]: https://github.com/hassan7303/slider-post-redirect/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hassan7303/slider-post-redirect.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/hassan7303/slider-post-redirect/network/members
[stars-shield]: https://img.shields.io/github/stars/hassan7303/slider-post-redirect.svg?style=for-the-badge
[stars-url]: https://github.com/hassan7303/slider-post-redirect/stargazers
[license-shield]: https://img.shields.io/github/license/hassan7303/slider-post-redirect.svg?style=for-the-badge
[license-url]: https://github.com/hassan7303/slider-post-redirect/blob/master/LICENCE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hassan-ali-askari-280bb530a/
[telegram-shield]: https://img.shields.io/badge/-Telegram-blue.svg?style=for-the-badge&logo=telegram&colorB=555
[telegram-url]: https://t.me/hassan7303
[instagram-shield]: https://img.shields.io/badge/-Instagram-red.svg?style=for-the-badge&logo=instagram&colorB=555
[instagram-url]: https://www.instagram.com/hasan_ali_askari
[github-shield]: https://img.shields.io/badge/-GitHub-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/hassan7303
[email-shield]: https://img.shields.io/badge/-Email-orange.svg?style=for-the-badge&logo=gmail&colorB=555
[email-url]: mailto:hassanali7303@gmail.com

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Telegram][telegram-shield]][telegram-url]
[![Instagram][instagram-shield]][instagram-url]
[![GitHub][github-shield]][github-url]
[![Email][email-shield]][email-url]



# Custom Slider Redirect

A plugin for WordPress that enables redirection to specific post pages when a slider slide is clicked.

## Plugin Information
- **Plugin Name:** Custom Slider Redirect
- **Description:** A plugin to redirect to post pages on slider click.
- **Version:** 1.0.0
- **Author:** Hassan Ali Askari
- **Author URI:** [Telegram](https://t.me/hassan7303)
- **Plugin URI:** [GitHub](https://github.com/hassan7303)
- **License:** MIT
- **License URI:** [MIT License](https://opensource.org/licenses/MIT)
- **Email:** hassanali7303@gmail.com

---

## Table of Contents
- [Description](#description)
- [Functionality](#functionality)
- [Installation](#installation)
- [Configuration](#configuration)
- [فارسی](#فارسی)

---

## Description
The **Custom Slider Redirect** plugin allows users to click on a slider slide (`rs-slide` element) and be redirected to the corresponding post page. The plugin extracts the post ID from each slide and builds the URL dynamically.

## Functionality
- **Script Injection:** Adds a JavaScript script to the page footer that waits for the page to fully load.
- **Event Handling:** The script attaches a click event to each slide (`rs-slide`) in the slider.
- **URL Building and Redirecting:** Upon clicking any slide, the post ID is extracted from the slide's `data-key` attribute, and the user is redirected to the respective post page.

## Installation
1. Upload the plugin file to the `wp-content/plugins/` directory.
2. Activate the plugin from the WordPress admin dashboard under "Plugins."

## Configuration
No additional configuration is required for this plugin.

---

## فارسی

### توضیحات
پلاگین **Custom Slider Redirect** این امکان را فراهم می‌کند که کاربران با کلیک روی هر اسلاید (عنصر `rs-slide`) به صفحه پست مربوطه هدایت شوند. این پلاگین شناسه پست را از هر اسلاید استخراج کرده و URL را به صورت دینامیک می‌سازد.

### عملکرد
 **اضافه‌کردن اسکریپت:** یک اسکریپت جاوااسکریپت به فوتر صفحه اضافه می‌کند که منتظر بارگذاری کامل صفحه می‌ماند.
 **مدیریت رویداد کلیک:** رویداد کلیک به هر اسلاید (`rs-slide`) اضافه می‌شود.
 **ساخت URL و هدایت:** با کلیک روی هر اسلاید، `ID` پست از `data-key` استخراج شده و کاربر به صفحه مربوطه هدایت می‌شود.

### نصب
۱. فایل پلاگین را در مسیر `wp-content/plugins/` قرار دهید.
۲. پلاگین را از پیشخوان وردپرس و بخش "پلاگین‌ها" فعال کنید.

### تنظیمات
این پلاگین نیازی به تنظیمات اضافی ندارد.