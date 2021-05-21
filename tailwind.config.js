module.exports = {
  mode: "jit",
  purge: {
    content: ["./template-parts/**/*.php", "./*.php", "./inc/**/*.php", "./inc/*.php", "./safe-jit/*.php"],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography")],
};
