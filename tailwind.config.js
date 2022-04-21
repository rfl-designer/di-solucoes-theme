module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    screens: {
      'sm': '768px',
      'md': '960px',
      'lg': '1152px',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        lg: '0.75rem',
      },
    },
    extend: {
      colors: {},
    },
  },
  plugins: [],
}