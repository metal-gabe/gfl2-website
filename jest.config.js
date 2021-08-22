// LINK: https://create-react-app.dev/docs/running-tests/#configuration

module.exports = {
   automock: false,
   collectCoverage: true,
   collectCoverageFrom: [
      "<rootDir>/src/{components,utils}/**/*.{[jt]s?(x)}",
      "!<rootDir>/node_modules/",
   ],
   coverageReporters: ["lcov", "text"],
   coverageDirectory: "coverage",
   coverageThreshold: {
      global: {
         branches: 0,
         functions: 0,
         lines: 0,
         statements: 0,
      },
   },
   moduleDirectories: ["node_modules"],
   moduleFileExtensions: ["js", "json", "jsx", "node", "ts", "tsx"],
   moduleNameMapper: {
      // The below rule creates proxies for stylesheets so that Jest handles them effectively -- https://jestjs.io/docs/webpack#mocking-css-modules
      "^.+\\.(css|less|sass|scss)$": "identity-obj-proxy",
      "^.+\\.(png|svg|pdf|jpg|jpeg)$": "jest-transform-stub",
      "^@/(.*)$": "<rootDir>/src/$1",
   },
   // preset: "",
   // roots: ["<rootDir>/src"], // NOTE :: This is configured by default it seems (and it overwrites something else that makes Jest not find any tests), but I'm keeping this here for visibility -- (Metal Gabe, 02-May-2021 @ 16:34)
   setupFilesAfterEnv: ["<rootDir>/tests/jest.setup.js"],
   // snapshotSerializers: ["enzyme-to-json/serializer"], // TODO :: Un-comment this when Enzyme gets added in
   testMatch: [
      "**/tests/unit/**/*.spec.[jt]s?(x)",
      "**/tests/unit/**/*.test.[jt]s?(x)",
      "**/__tests__/*.[jt]s?(x)",
   ],
   testPathIgnorePatterns: ["<rootDir>/tests/mocks/", "<rootDir>/tests/__mocks__/"],
   testTimeout: 20000,
   testURL: "http://localhost:8888/",
   transformIgnorePatterns: ["<rootDir>/node_modules/"],
   verbose: true,
};
