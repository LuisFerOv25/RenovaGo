/**
 * changes date string to time ago string.
 * @param dateString - The date string to convert to a time ago string.
 * @returns A string that tells the user how long ago the date was.
 */
function dateStringToTimeAgo(dateString) {
  const now = new Date();
  const date = new Date(dateString);
  const seconds = Math.floor((now - date) / 1000);
  const minutes = Math.floor(seconds / 60);
  const horas = Math.floor(minutes / 60);
  const days = Math.floor(horas / 24);
  const weeks = Math.floor(days / 7);
  if (seconds < 60) {
    return "Justo ahora";
  } else if (minutes < 60) {
    return `${minutes}minuto(s)`;
  } else if (horas < 24) {
    return `${horas}hora(s)`;
  } else if (days < 7) {
    return `${days}dias(s)`;
  } else {
    return `${weeks}semana(s)`;
  }
}
/**
 * It returns a function that, when invoked, will wait for a specified amount of time before executing
 * the original function.
 * @param callback - The function to be executed after the delay.
 * @param delay - The amount of time to wait before calling the callback.
 * @returns A function that will call the callback function after a delay.
 */
function debounce(callback, delay) {
  let timerId;
  return function (...args) {
    clearTimeout(timerId);
    timerId = setTimeout(() => {
      callback.apply(this, args);
    }, delay);
  };
}
