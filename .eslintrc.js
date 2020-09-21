module.exports = {
	env: {
		browser: true,
		es6: true,
		jest: true,
		mocha: true,
		node: true,
	},
	extends: [
		'airbnb',
		'plugin:react/recommended',
		'plugin:prettier/recommended',
		'prettier/react',
	],
	globals: {
		Atomics: 'readonly',
		pageData: 'readonly',
		React: 'writable',
		SharedArrayBuffer: 'readonly',
	},
	parserOptions: {
		ecmaFeatures: {
			jsx: true,
			modules: true,
		},
		ecmaVersion: 2018,
		sourceType: 'module',
	},
	plugins: [
		'react',
		'eslint:recommended',
		'plugin:react/recommended',
		'prettier',
	],
	rules: {
		// ESLint Builtins
		'arrow-body-style': 'off',
		'arrow-parens': ['error', 'as-needed'],
		'class-methods-use-this': 'off',
		'consistent-return': 'off',
		'curly': ['error', 'all'],
		'func-names': ['off', 'never'],
		'max-len': 'off',
		'no-console': ['error', { allow: ['error'] }],
		'no-return-assign': 'off',
		'no-unused-vars': ['error', { args: 'none', ignoreRestSiblings: true }],
		'no-useless-escape': 'off',
		'operator-linebreak': 'off',
		'quote-props': ['error', 'consistent-as-needed'],
		// React Plugin
		'react/button-has-type': 'off',
		// 'react/jsx-filename-extension': ['warn', { extensions: ['.js'] }],
		// the above line gives me a warning when using JSX syntax inside of a .jsx file
		'react/jsx-filename-extension': ['warn', { extensions: ['.js', '.jsx'] }], // testing if 'warn' is the same thing as '1'
		'react/jsx-one-expression-per-line': 'off',
		'react/jsx-sort-props': [
			'warn',
			{ ignoreCase: true, shorthandFirst: true },
		],
		'react/jsx-wrap-multilines': [
			'warn',
			{
				arrow: 'parens-new-line',
				assignment: 'parens-new-line',
				condition: 'ignore',
				declaration: 'parens-new-line',
				logical: 'ignore',
				prop: 'ignore',
				return: 'parens-new-line',
			},
		],
		'react/no-array-index-key': 'off',
		// 'react/require-default-props': [(enabled = 0)],
		'react/prop-types': 'off',
		'react/sort-comp': 'off',
		// Prettier Plugin
		'prettier/prettier': 'error',
		// Import Plugin
		'import/no-extraneous-dependencies': 'off',
		'import/order': 'off',
	},
};
