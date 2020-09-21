// ---------------------------------------------
// PRETTIER CONFIG FILE
// ---------------------------------------------
module.exports = {
	arrowParens: 'avoid',
	bracketSpacing: true,
	endOfLine: 'lf',
	htmlWhitespaceSensitivity: 'css',
	insertPragma: false,
	jsxBracketSameLine: false,
	jsxSingleQuote: false,
	printWidth: 80,
	quoteProps: 'consistent',
	requirePragma: false,
	semi: true,
	singleQuote: true,
	tabWidth: 3,
	trailingComma: 'all',
	useTabs: true,
	// Are the below "overrides" needed? -- https://prettier.io/docs/en/configuration.html#configuration-overrides
	overrides: [
		{
			files: '.prettierrc.js',
			// options: { parser: 'js' }, // not sure why this isn't working? maybe a Next.js thing?
		},
	],
};
