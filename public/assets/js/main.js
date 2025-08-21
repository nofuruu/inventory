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
