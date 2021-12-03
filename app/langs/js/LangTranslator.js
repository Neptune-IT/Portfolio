import { EN_MESSAGES } from "./countries/EN.js";
import { FR_MESSAGES } from "./countries/FR.js";
import { SPA_MESSAGES } from "./countries/SPA.js";

export function translate(identifier, language) {
    switch (language) {
        case "french":
            return FR_MESSAGES[identifier];
        case "english":
            return EN_MESSAGES[identifier];
        case "spanish":
            return SPA_MESSAGES[identifier];
        default:
            return EN_MESSAGES[identifier];
    }
}