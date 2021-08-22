/* eslint-disable no-undef */
/* ========================================================================== */
// ALL REQUIRED IMPORTS
/* ========================================================================== */
// Packages
// Context
// Components / Classes
// Assets
// Constants
// Utils / Methods
// Styles

// TODO :: Switch these over to the Enzyme versions once that is set up -- see Quiver BRI notes
// Make Jest assertion functions available in all test files without having to import them individually
const { mount, render, shallowMount } = jest;

global.mount = mount;
global.render = render;
global.shallowMount = shallowMount;
