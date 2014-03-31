/**
 * Equal Heights Plugin
 * Equalize the heights of elements. Great for columns or any elements
 * that need to be the same size (floats, etc).
 * 
 * Version 1.0
 * Updated 12/10/2008
 *
 * Copyright (c) 2008 Rob Glazebrook (cssnewbie.com) 
 *
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 * 
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 * 
 */


jQuery.fn.equalCols = function(){
//Array Sorter
var sortNumber = function(a,b){return b - a;};
var heights = [];
//Push each height into an array
$(this).each(function(){
heights.push($(this).height());
});
heights.sort(sortNumber);
var maxHeight = heights[0];
return this.each(function(){
//Set each column to the max height
$(this).css({'height': maxHeight});
});
};
