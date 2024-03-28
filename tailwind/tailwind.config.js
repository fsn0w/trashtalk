// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				superdisp: ['GT-SuperdDisplay', 'sans-serif'],
				futura: ['Futura', 'sans-serif'],
				inter: ['Inter', 'sans-serif'],
				worksans: ['Work Sans', 'sans-serif']
			},
			fontSize: {
				'4xl': ['4rem', '1.2em'],
				'5xl': ['7rem', '1.2em'],
			}
		},
		container: {
			padding: {
			  DEFAULT: '2rem',
			  sm: '4rem',
			  lg: '6rem',
			  xl: '7rem',
			  '2xl': '10rem',
			},
		},
		keyframes: {
			voiceleft: {
			  '0%': { transform: 'translateX(0px)' },
			  '50%': { opacity: 1 },
			  '80%': { transform: 'translateX(-20px)'},
			  '100%': { opacity:0, transform: 'translateX(-20px)' },
			},
			voiceright: {
				'0%': { transform: 'translateX(0px)' },
				'50%': { opacity: 1 },
				'80%': { transform: 'translateX(20px)'},
				'100%': { opacity:0, transform: 'translateX(20px)' },
			  }
		},
		animation: {
			'voiceleft': 'voiceleft 4s infinite',
			'voiceright': 'voiceright 4s infinite',
		}
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),
		require("tailwindcss-animation-delay"),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
