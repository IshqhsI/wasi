let buttonNav = document.querySelector(".navbar-toggler");

buttonNav.addEventListener("click", function () {
    let sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("show");
});

$(document).ready(function () {
    // table
    $("#myTable").DataTable({
        responsive: true,
    });

    $("#example").DataTable({
        responsive: true,
    });

    $(".lebihdariTiga").hide();

    $('input:radio[name="lama_pendirian_badan_usaha"]').change(function () {
        if (this.checked && this.value === "Lebih dari 3 tahun") {
            $(".lebihdariTiga").show();
        } else {
            $(".lebihdariTiga").hide();
        }
    });

    $(".persen").hide();

    $('input:radio[name="penggunaan_barang_material"]').change(function () {
        if (this.checked && this.value === "Luar Negeri") {
            $(".persen").show();
        } else {
            $(".persen").hide();
        }
    });

    $(".standarOperasional").hide();

    $("input:radio[name='standar_mutu_peralatan']").change(function () {
        if (this.checked && this.value === "Ada") {
            $(".standarOperasional").show();
        } else {
            $(".standarOperasional").hide();
        }
    });
});
