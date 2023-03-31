let contentWrapper = document.querySelector(".content-wrapper");

export function fetchContents(location, tableId) {
  fetch(location)
    .then((response) => response.text())
    .then((html) => {
      //contentWrapper.innerHTML = html
      let parser = new DOMParser();
      let doc = parser
        .parseFromString(html, "text/html")
        .querySelector("#view");
      contentWrapper.innerHTML = doc.innerHTML;
      $(function () {
        //Initialize Select2 Elements

        $(".select2").select2();

        //Initialize Select2 Elements
        $(".select2bs4").select2({
          theme: "bootstrap4",
        });
      });

      let table = document.querySelector("table");

      if (table) {
        let tableId = document.querySelector("table").id;
        $(function () {
          $(`#${tableId}`)
            .DataTable({
              responsive: true,
              lengthChange: false,
              autoWidth: false,
              buttons: ["csv", "excel", "pdf", "print"],
            })
            .buttons()
            .container()
            .appendTo(`#${tableId}_wrapper .col-md-6:eq(0)`);
        });
      }
    });
}
