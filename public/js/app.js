document.addEventListener("click", this.mouseHandler);

mouseHandler = (event) => {
    let X = event.clientX / window.innerWidth;
    let Y = event.clientY / window.innerHeight;
    console.log("The X Coördinates are: ", X, "And the Y Coördinates are:", Y)
}