/** @type {import('tailwindcss').Config} */
export default {
  content: ["./**/*.php", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    backgroundImage: {
      hero: "url('assets/images/background-hero.jpg')",
      agendar: "url('assets/images/agendar.jpg')",
    },
    container: {
      center: true,
      screens: {
        "2xl": "1400px",
      },
    },
    fontFamily: {
      sans: ["Poppins"],
    },
    extend: {
      colors: {
        lime: {
          50: "#fcffe4",
          100: "#f6ffc4",
          200: "#ecff90",
          300: "#dbff50",
          400: "#c2ff00",
          500: "#a9e600",
          600: "#83b800",
          700: "#628b00",
          800: "#4e6d07",
          900: "#425c0b",
          950: "#213400",
        },
        black: {
          10: "#ffffff",
          50: "#f6f6f6",
          100: "#e7e7e7",
          200: "#d1d1d1",
          300: "#b0b0b0",
          400: "#888888",
          500: "#6d6d6d",
          600: "#5d5d5d",
          700: "#4f4f4f",
          800: "#454545",
          900: "#3d3d3d",
          950: "#000000",
        },
      },
    },
  },
  plugins: [],
};
