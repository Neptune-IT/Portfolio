import { EN_MESSAGES } from "./countries/EN.js";
import { FR_MESSAGES } from "./countries/FR.js";
import { ES_MESSAGES } from "./countries/ES.js";

export function translate(identifier, language) {
    switch (language) {
        case "french":
            return FR_MESSAGES[identifier];
        case "english":
            return EN_MESSAGES[identifier];
        case "spanish":
            return ES_MESSAGES[identifier];
        default:
            return EN_MESSAGES[identifier];
    }
}