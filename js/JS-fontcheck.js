function getComputedFontFamily(element) {
	const computedStyle = window.getComputedStyle(element);
	return computedStyle.getPropertyValue('font-family');
}
