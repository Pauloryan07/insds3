// tailwind.config.js
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        green: {
          50:  '#f0faf4',
          100: '#d6f2e0',
          200: '#aee1c0',
          400: '#6bbf8a',
          600: '#3d9162',
          800: '#1f5c3b',
        },
        gray: {
          100: '#f7f7f5',
          300: '#e2e2dc',
          500: '#888880',
          700: '#4a4a46',
          900: '#1c1c1a',
        }
      },
      fontFamily: {
        serif: ['"DM Serif Display"', 'serif'],
        sans:  ['"DM Sans"', 'sans-serif'],
      },
      borderRadius: {
        sm:   '8px',
        md:   '14px',
        lg:   '24px',
        full: '9999px',
      },
      boxShadow: {
        card: '0 4px 32px rgba(61,145,98,0.08)',
        feat: '0 2px 16px rgba(61,145,98,0.07)',
      }
    }
  },
  plugins: [],
}