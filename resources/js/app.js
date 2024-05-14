// import './bootstrap';
import "~resources/css/app.scss";
// import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
