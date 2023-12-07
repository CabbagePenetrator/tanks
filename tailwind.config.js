/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        "blue": {
          500: "#08A8A1",
          900: "#1D1C59"
        }
      }
    },
  },
  plugins: [],
}
