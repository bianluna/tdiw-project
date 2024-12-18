document.addEventListener('DOMContentLoaded', () => {
    // Selecciona tots els enllaços amb l'atribut data-category-id
    const categoryLinks = document.querySelectorAll('[data-category-id]');

    categoryLinks.forEach(link => {
        link.addEventListener('click', handleCategoryClick);
    });
});

/*async function handleCategoryClick(event) {
    event.preventDefault(); // Evita que l'enllaç faci el comportament per defecte

    const categoryId = event.target.getAttribute('data-category-id'); // Obté el valor de la categoria
    console.log(categoryId);

    const newUrl = `/../booksByCategory.php?category=${encodeURIComponent(categoryId)}`;
    window.history.pushState({ path: newUrl }, '', newUrl);

    try {
        const response = await fetch(`../controller/c_productListByCat.php?category=${encodeURIComponent(categoryId)}`, {
            method: 'GET',
        });

        if (!response.ok) {
            throw new Error(`HTTP error: ${response.status}`);
        }

        const books = await response.text(); // Get the response as text
        console.log(books);
        console.log(document.getElementById('luna'))
        //document.getElementById('luna').innerHTML = books; // Update the content
        document.getElementById('book-display').innerHTML = books;
    } catch (error) {
        console.error('Error fetching books:', error);
    }
}*/

// Generar dinámicamente los libros
async function booksByCategory(event) {
    // Log the event object for debugging
    console.log('Event object:', event);

    event.preventDefault(); // Prevent the default link behavior
    console.log('Default action prevented');

    // Get the data-category-id attribute from the clicked anchor
    const categoryId = event.target.getAttribute('data-category-id');
    console.log('Category ID:', categoryId);

    // Update the URL without reloading the page
    //const newUrl = `/../booksByCategory.php?category=${encodeURIComponent(categoryId)}`;
    //console.log('New URL:', newUrl);
    //window.history.pushState({ path: newUrl }, '', newUrl);
    //console.log('URL updated in history');

    try {
        // Fetch the data from the server
        const response = await fetch(`../controller/c_productListByCat.php?category=${encodeURIComponent(categoryId)}`);
        console.log('Response status:', response.status);

        if (!response.ok) throw new Error(`HTTP error: ${response.status}`);

        const books = await response.text(); // Get the response as text
        console.log('Books data fetched:', books);

        // Update the content in the #category element
        const categoryElement = document.getElementById('book-display');
        console.log('Category element:', categoryElement);

        //Update the content of bookByCat
        const headerElement = document.getElementById('home');
        headerElement.style.display = 'none';

        categoryElement.innerHTML = books; // Update the content
        console.log('Category content updated');
    } catch (error) {
        console.error('Error fetching books:', error);
    }
}

// Generar dinámicamente las cards de categoria
async function listCategories(event) {
    // Log the event object for debugging
    console.log('Event object:', event);

    event.preventDefault(); // Prevent the default link behavior
    console.log('Default action prevented');

    try {
        // Fetch the data from the server
        const response = await fetch("../controller/c_categories.php");
        console.log('Response status:', response.status);

        if (!response.ok) throw new Error(`HTTP error: ${response.status}`);

        const categories = await response.text(); // Get the response as text
        console.log('Categories data fetched:', categories);

        // Update the content in the #category element
        const categoryElement = document.getElementById('book-display');
        console.log('Category element:', categoryElement);

        //Update the content of bookByCat
        const headerElement = document.getElementById('home');
        headerElement.style.display = 'none';

        categoryElement.innerHTML = categories; // Update the content
        console.log('Category content updated');
    } catch (error) {
        console.error('Error fetching categories:', error);
    }
}

// Generar dinámicamente los detalles de los libros
async function getBook(event) {
    // Log the event object for debugging
    console.log('Event object:', event);

    event.preventDefault(); // Prevent the default link behavior
    console.log('Default action prevented');

    // Get the data-category-id attribute from the clicked anchor
    const bookId = event.target.getAttribute('book-id');
    console.log('Book ID:', bookId);

    try {
        // Fetch the data from the server
        const response = await fetch(`../controller/c_product.php?product_id=${encodeURIComponent(bookId)}`);
        console.log('Response status:', response.status);

        if (!response.ok) throw new Error(`HTTP error: ${response.status}`);

        const books = await response.text(); // Get the response as text
        console.log('Book data fetched:', books);

        // Update the content in the #category element
        const categoryElement = document.getElementById('book-display');
        console.log('Category element:', categoryElement);

        //Update the content of bookByCat
        const headerElement = document.getElementById('home');
        headerElement.style.display = 'none';

        categoryElement.innerHTML = books; // Update the content
        console.log('Category content updated');
    } catch (error) {
        console.error('Error fetching books:', error);
    }
}

async function checkEmail() {
    // Retrieve the email input value
    const emailInput = document.getElementById("emailInput").value;
    //console.log("Email entered: ", emailInput);
    var response = await fetch("../controller/c_checkEmail.php?email=" + emailInput);
    const responsetxt = await response.text();
    const responsetrim = responsetxt.trim();

    if (responsetrim == "true") {
        //alert("Email already exists. Please log in.");
        window.location.href = "../loginPassword.php";
    } else {
        window.location.href = "../signup.php";
        //alert("Email not found. Creating a new account.");
    }

}

async function addNewUser() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const address = document.getElementById("direccion").value;
    const city = document.getElementById("poblacion").value;
    const postal_code = document.getElementById("codigo_postal").value;

    var response = await fetch("../controller/c_saveUser.php");


}

//Go to recommended book 
function goToSection(sectionId) {
    // Change the hash to navigate to the desired section
    window.location.hash = `#${sectionId}`;
}