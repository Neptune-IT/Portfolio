import { translate } from "./js/LangTranslator.js";

export function change(lang) {
    document.getElementById('NAV_HOME').innerHTML = translate("NAV_HOME", lang);
    document.getElementById('NAV_ABOUT').innerHTML = translate("NAV_ABOUT", lang);
    document.getElementById('NAV_SKILLS').innerHTML = translate("NAV_SKILLS", lang);
    document.getElementById('NAV_PROJECTS').innerHTML = translate("NAV_PROJECTS", lang);
    document.getElementById('NAV_CONTACTS').innerHTML = translate("NAV_CONTACTS", lang);
    document.getElementById('HOME_PRESENTATION_TEXT').innerHTML = translate("HOME_PRESENTATION_TEXT", lang);

    document.getElementById('SKILLS_TITLE').innerHTML = translate("SKILLS_TITLE", lang);
    document.getElementById('SKILLS_SUBTITLE').innerHTML = translate("SKILLS_SUBTITLE", lang);

    document.getElementById('ABOUT_TITLE').innerHTML = translate("ABOUT_TITLE", lang);
    document.getElementById('ABOUT_SUBTITLE').innerHTML = translate("ABOUT_SUBTITLE", lang);
    document.getElementById('ABOUT_PROFILE_TITLE').innerHTML = translate("ABOUT_PROFILE_TITLE", lang);
    document.getElementById('ABOUT_PROFILE_TEXT').innerHTML = translate("ABOUT_PROFILE_TEXT", lang);

    document.getElementById('CAREER_TITLE').innerHTML = translate("CAREER_TITLE", lang);
    document.getElementById('CAREER_COLUMN1_TITLE').innerHTML = translate("CAREER_COLUMN1_TITLE", lang);
    document.getElementById('CAREER_COLUMN1_SUBTITLE').innerHTML = translate("CAREER_COLUMN1_SUBTITLE", lang);
    document.getElementById('CAREER_COLUMN1_DATE').innerHTML = translate("CAREER_COLUMN1_DATE", lang);
    document.getElementById('CAREER_COLUMN1_TEXT').innerHTML = translate("CAREER_COLUMN1_TEXT", lang);
    document.getElementById('CAREER_COLUMN2_TITLE').innerHTML = translate("CAREER_COLUMN2_TITLE", lang);
    document.getElementById('CAREER_COLUMN2_SUBTITLE').innerHTML = translate("CAREER_COLUMN2_SUBTITLE", lang);
    document.getElementById('CAREER_COLUMN2_DATE').innerHTML = translate("CAREER_COLUMN2_DATE", lang);
    document.getElementById('CAREER_COLUMN2_TEXT').innerHTML = translate("CAREER_COLUMN2_TEXT", lang);
    document.getElementById('CAREER_COLUMN3_TITLE').innerHTML = translate("CAREER_COLUMN3_TITLE", lang);
    document.getElementById('CAREER_COLUMN3_SUBTITLE').innerHTML = translate("CAREER_COLUMN3_SUBTITLE", lang);
    document.getElementById('CAREER_COLUMN3_DATE').innerHTML = translate("CAREER_COLUMN3_DATE", lang);
    document.getElementById('CAREER_COLUMN3_TEXT').innerHTML = translate("CAREER_COLUMN3_TEXT", lang);
    document.getElementById('CAREER_COLUMN4_TITLE').innerHTML = translate("CAREER_COLUMN4_TITLE", lang);
    document.getElementById('CAREER_COLUMN4_SUBTITLE').innerHTML = translate("CAREER_COLUMN4_SUBTITLE", lang);
    document.getElementById('CAREER_COLUMN4_DATE').innerHTML = translate("CAREER_COLUMN4_DATE", lang);
    document.getElementById('CAREER_COLUMN4_TEXT').innerHTML = translate("CAREER_COLUMN4_TEXT", lang);

    document.getElementById('PROJECTS_TITLE').innerHTML = translate("PROJECTS_TITLE", lang);
    document.getElementById('PROJECTS_SUBTITLE').innerHTML = translate("PROJECTS_SUBTITLE", lang);
    document.getElementById('CONTACTS_TITLE').innerHTML = translate("CONTACTS_TITLE", lang);
    document.getElementById('CONTACTS_SUBTITLE').innerHTML = translate("CONTACTS_SUBTITLE", lang);
    document.getElementById('FOOTER').innerHTML = translate("FOOTER", lang);
}