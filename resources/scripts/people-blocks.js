export default function () {
  const persons = document.querySelectorAll(".wp-block-person");

  persons.forEach((person) => {
    console.log(person);
    let summary = person.querySelector(".wp-block-columns");
    let details = person.querySelector(".person-details");
    summary.setAttribute("aria-expanded", false);
    details.hidden = true;

    summary.addEventListener("click", function () {
      let expanded = summary.getAttribute("aria-expanded") === "true" || false;

      summary.setAttribute("aria-expanded", !expanded);

      if (!expanded) {
        details.removeAttribute("hidden");
      } else {
        details.setAttribute("hidden", true);
      }
    });
  });
}
