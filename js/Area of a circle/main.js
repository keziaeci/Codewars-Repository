/**Complete the function which will return the area of a circle with the given radius.

Returned value is expected to be accurate up to tolerance of 0.01.

If the radius is not positive, throw Error. */
function circleArea(radius) {
    try {
        if (radius > 0) return Math.PI * Math.pow(radius, 2)
    } catch (error) {
        // throw error
        throw new Error
    }
    // return radius < 0 ? (function thrower() {throw new Error('Error') }()) : Math.PI * Math.pow(radius, 2)
    // let a = Math.PI * Math.pow(radius, 2)
    
    // return radius < 0
}

console.log(circleArea(0));