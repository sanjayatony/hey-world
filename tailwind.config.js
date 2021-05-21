module.exports = {
  mode: "jit",
  purge: {
    content: ["./src/**/*.php", "./template-parts/**/*.php", "./*.php", "./inc/**/*.php", "./inc/*.php", "./src/**/*.js"],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
