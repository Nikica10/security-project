/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');
require('../css/login.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

const $ = require('jquery');
import 'popper.js';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.css';


$(document).ready(function(){
    // Put your jquery code here.
    console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
});
