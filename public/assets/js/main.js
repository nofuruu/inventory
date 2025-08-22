/**
 * SweetAlert2 custom toast with dynamic colors per type
 * @param {string} type - success | error | info | warning | question
 * @param {string} message - Message to show
 */
function showToast(type, message) {
  const iconClassMap = {
    success: "toast-success",
    error: "toast-error",
    info: "toast-info",
    warning: "toast-warning",
    question: "toast-question",
  };

  const customClass = iconClassMap[type] || "toast-default";

  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    customClass: {
      popup: `colored-toast ${customClass}`,
    },
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });

  Toast.fire({
    icon: type,
    title: message,
  });
}

document.addEventListener("DOMContentLoaded", () => {
  // Mendapatkan semua elemen dengan atribut data-toggle="custom-dropdown"
  const dropdownToggles = document.querySelectorAll(
    '[data-toggle="dropdown"]'
  );

  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", (event) => {
      event.preventDefault(); // Mencegah tindakan default dari tautan atau tombol

      // Mendapatkan ID dari target dropdown dari atribut href atau data-target
      const targetId =
        toggle.getAttribute("href") || toggle.getAttribute("data-target");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        // Mendapatkan status saat ini dari aria-expanded
        const isExpanded = toggle.getAttribute("aria-expanded") === "true";

        // Mengatur status 'aria-expanded' yang baru
        toggle.setAttribute("aria-expanded", !isExpanded);

        // Menukar kelas 'show' pada elemen target
        targetElement.classList.toggle("show");
      }
    });
  });

  // Menutup semua dropdown jika klik di luar area dropdown
  document.addEventListener("click", (event) => {
    dropdownToggles.forEach((toggle) => {
      const isExpanded = toggle.getAttribute("aria-expanded") === "true";
      if (isExpanded) {
        const targetId =
          toggle.getAttribute("href") || toggle.getAttribute("data-target");
        const targetElement = document.querySelector(targetId);

        // Memeriksa apakah yang diklik adalah toggle itu sendiri atau di dalam dropdown
        if (
          !toggle.contains(event.target) &&
          !targetElement.contains(event.target)
        ) {
          toggle.setAttribute("aria-expanded", "false");
          targetElement.classList.remove("show");
        }
      }
    });
  });
});
