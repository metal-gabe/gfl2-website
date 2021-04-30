module.exports = {
   future: {
      purgeLayersByDefault: true,
      removeDeprecatedGapUtilities: true,
   },
   plugins: [],
   purge: [],
   theme: {
      extend: {
         colors: {
            badass: '#bada55',
         },
      },
   },
   variants: {
      padding: ['first', 'last'],
   },
};
