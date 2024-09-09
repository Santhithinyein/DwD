/**
 * Function to change language
 * @param {String} lang - 'en' or 'mm'
 */
function changeLanguage(lang) {
    switch (lang) {
        case "en":
            $(".mm").hide();
            $(".en").show();
            break;

        case "mm":
            $(".mm").show();
            $(".en").hide();
            break;
    }
}

/**
 * Function to listent language change btn click
 */
function listentLanguageChange() {
    const mm = document.querySelector("[data-language-change='mm']");
    const en = document.querySelector("[data-language-change='en']");

    if (mm && en) {
        mm.addEventListener("click", () => {
            sessionStorage.setItem("language", "mm");
            changeLanguage("mm");
        });
        en.addEventListener("click", () => {
            sessionStorage.setItem("language", "en");
            changeLanguage("en");
        });
    }
}

// Load langauge when document is loaded
document.onreadystatechange = () => {
    if (document.readyState === "complete") {
        const data = sessionStorage.getItem("language");
        changeLanguage(data ?? "en");
        listentLanguageChange();
    }
};
