const { key = "lang" } = document.documentElement.dataset;

function changeLang(lang = localStorage[key] ?? "mm") {
  localStorage[key] = document.documentElement.lang = lang;
  document
    .querySelectorAll(`[data-lang_${lang}]`)
    .forEach((e) => (e.textContent = e.dataset[`lang_${lang}`]));
    window.$?.(window).trigger('resize');
}

addEventListener("DOMContentLoaded", () => {
  changeLang();
});

addEventListener("click", (e) => {
  const ele = e.target.closest("[data-language-change]");
  ele && changeLang(ele.dataset.languageChange);
});

changeLang();
