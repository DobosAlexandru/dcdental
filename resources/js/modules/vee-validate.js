import { extend } from "vee-validate";
import moment from 'moment'

extend("required", {
    ...required,
    message: "Campul {_field_} este obligatoriu"
});

extend("email", {
    ...email,
    message: "Va rugam sa introduceti un email valid"
});

extend("numeric", {
    ...numeric,
    message: "Va rugam sa introduceti nr.de telefon valid"
});

extend("max", {
    ...max,
    message: "Ati depasit numarul maxim de caractere"
});

extend("min", {
    ...min,
    message: "Va rugam sa introduceti nr. min de caractere"
});

extend('minStartDate', {
    ...required,
    message: "Campul data programare este obligatoriu"
})
