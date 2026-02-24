/**
 * Analytics helper — pushes custom events to the GTM dataLayer.
 */
window.dataLayer = window.dataLayer || [];

window.trackEvent = function (event, data) {
    window.dataLayer.push({ event, ...data });
};
