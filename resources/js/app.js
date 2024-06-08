import './bootstrap';
function updateEstimate() {
    const pages = document.getElementById('pageInput').value;
    const price = document.getElementById('price').value;
    const discount = document.getElementById('discount').value;

    console.log(pages)

    let totalCost = quantity * price;
    totalCost -= totalCost * (discount / 100);

    document.getElementById('pages').innerText = `yugugug`;
}

document.addEventListener('DOMContentLoaded', updateEstimate);
console.log("hello")

