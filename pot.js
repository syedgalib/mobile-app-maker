const wpPot = require('wp-pot');
 
wpPot({
  destFile: './languages/mobile-app-maker.pot',
  domain: 'mobile-app-maker',
  package: 'Mobile App Maker',
  src: './**/*.php'
});