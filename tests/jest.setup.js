/* eslint-disable no-undef */
/* ========================================================================== */
// ALL REQUIRED IMPORTS
/* ========================================================================== */
// React
// Packages
// Context / Store / Router
// Components / Classes
// Assets
// Constants / Models / Interfaces / Types
// Utils / Methods / Mocks
// Styles

/* ========================================================================== */
// ALL GLOBAL CONFIGURATIONS
/* ========================================================================== */
// TODO :: Switch these over to the Enzyme versions once that is set up -- see Quiver BRI notes
// Make Jest assertion functions available in all test files without having to import them individually
const { mount, render, shallowMount } = jest;

global.mount = mount;
global.render = render;
global.shallowMount = shallowMount;
