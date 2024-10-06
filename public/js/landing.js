//MENU TAB
function toggleMenu() {
    const navList = document.querySelector('.nav-list');
    navList.classList.toggle('show');
}

// Close the menu when a navigation link is clicked
document.querySelectorAll('.nav-list li a').forEach(link => {
    link.addEventListener('click', () => {
        const navList = document.querySelector('.nav-list');
        if (navList.classList.contains('show')) {
            navList.classList.remove('show'); // Hide the menu after clicking a link
        }
    });
});

// Close the menu if clicking outside of it or on content
document.addEventListener('click', (event) => {
    const navList = document.querySelector('.nav-list');
    const hamburger = document.querySelector('.hamburger');

    if (!hamburger.contains(event.target) && !navList.contains(event.target)) {
        navList.classList.remove('show'); // Hide the menu
    }
});

// UNDERLINE
const marker = document.querySelector("#marker");
const links = document.querySelectorAll("ul li a");
const sections = document.querySelectorAll("section"); // Your content sections
const logo = document.querySelector(".nav-pic"); // Assuming this is your logo container
let activeLink = null; // Start with no active link

// Set marker on hover and click
links.forEach((elem) => {
    elem.addEventListener("mouseenter", (e) => moveUnderline(e.target)); // Hover effect on each link
    elem.addEventListener("click", (e) => setActive(e.target)); // Make underline stay when clicked
    elem.addEventListener("mouseleave", () => {
        // Revert to the underline of the active link on mouse leave
        if (activeLink) moveUnderline(activeLink);
        else hideUnderline(); // If there's no active link (e.g., on homepage), hide the underline
    });
});


function moveUnderline(elem) {
    marker.style.width = elem.offsetWidth + "px";
    marker.style.left = elem.offsetLeft + "px";
}

function hideUnderline() {
    marker.style.width = "0px"; // Marker disappears when leaving the link
}

function setActive(elem) {
    // Remove active class from all links
    links.forEach((item) => item.classList.remove("active"));

    // Set clicked link as active and move the marker
    elem.classList.add("active");
    activeLink = elem; // Update active link
    moveUnderline(elem); // Keep the underline for the active link
}

// Hide the marker when clicking on the logo
logo.addEventListener("click", () => {
    hideUnderline(); // Marker disappears
    activeLink = null; // No active link when clicking the logo
});

// Function to update marker on scroll based on section visibility
function updateMarkerOnScroll() {
    let currentSection = '';
    const homeTop = document.querySelector("#home").offsetTop;
    const scrollPos = window.pageYOffset || document.documentElement.scrollTop;

    // Check if the page is scrolled to the home section (top of the page)
    if (scrollPos < homeTop + 50) { // Adding a small threshold for smoothness
        hideUnderline();
        activeLink = null;
        links.forEach((item) => item.classList.remove("active"));
        return; // Exit early to avoid marking any other sections as active
    }

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 120; // Adjust this offset based on your navbar height
        const sectionHeight = section.offsetHeight;
        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
            currentSection = section.getAttribute('id');
        }
    });

    // Update the marker based on the section in view
    links.forEach((link) => {
        if (link.getAttribute('href') === `#${currentSection}`) {
            setActive(link); // Set active link based on the section in view
        }
    });
}

// Trigger the scroll handler when the page is loaded to set the initial state
window.addEventListener("load", updateMarkerOnScroll);

// Update the marker as the user scrolls
window.addEventListener("scroll", updateMarkerOnScroll);

let i = 0;  // Start at the first image

let box1 = document.getElementById("image1");
let box2 = document.getElementById("image2");
let box3 = document.getElementById("image3");
let box4 = document.getElementById("image4");
let box5 = document.getElementById("image5");
let box6 = document.getElementById("image6");
let box7 = document.getElementById("image7");
let box8 = document.getElementById("image8");
let box9 = document.getElementById("image9");
let a1 = document.querySelector(".a1");
let a2 = document.querySelector(".a2");
let a3 = document.querySelector(".a3");
let a4 = document.querySelector(".a4");
let a5 = document.querySelector(".a5");
let a6 = document.querySelector(".a6");
let a7 = document.querySelector(".a7");
let a8 = document.querySelector(".a8");
let a9 = document.querySelector(".a9");

// Arrays for titles and descriptions
const titles = [
    "Kaori, Koa and Kyomi (ParvoVirus Survivor)",
    "Barbie and Molly (SPAY)",
    "Emi (Fully Vaccinated)",
    "Ginger (Pyometra)",
    "Maddie (Bladder Stone Removal via Cystotomy)",
    "Mathea (Heat Detection thru Progesterone Test)",
    "Ms. Kape (C-Section Delivery)",
    "Patch (Chocolate Toxicity Management)",
    "Chloe (Pregnancy: Ultrasound & X-ray)"
];

const descriptions = [
    "Canine parvovirus (CPV) is a highly contagious viral disease of dogs that commonly causes acute gastrointestinal illness in puppies. The disease most often strikes in pups between six and 20 weeks old, but older animals are sometimes also affected. A rare variant of the disease may be seen in very young (neonatal) puppies is myocarditis (an inflammation of the heart muscle).",
    "Spaying is the common term used to describe the surgical procedure known as an ovariohysterectomy. In this procedure, the ovaries and uterus are removed completely in order to sterilize a female dog. We are now performing an ovariectomy where only the ovaries are removed..",
    "The use of vaccines has prevented death and disease in millions of cats and it is important to continue this practice to ensure cats are protected throughout their lives. Vaccines also protect people from diseases, such as rabies, that could be transmitted from cats to humans.",
    "Pyometra is a secondary infection due to hormonal changes in a female's reproductive tract. Following estrus (heat), progesterone levels remain elevated for several weeks, stimulating the uterine lining to thicken in preparation for pregnancy. If pregnancy does not occur for several estrus cycles, the lining increases in thickness until cysts form in the uterus. This condition is called cystic endometrial hyperplasia.",
    "A cystotomy is usually recommended when a pet has bladder stones that cannot be removed by other means. Before surgery, your veterinarian may attempt to dissolve the stones with a prescription diet and/or a course of antibiotics. If this is unsuccessful, surgery will be recommended. Stones in the bladder cause inflammation leading to discomfort for your pet. If the stones pass into the urethra they may become stuck and cause an obstruction. A urethral obstruction will make your pet very ill and if not resolved quickly will result in death.",
    "These tests accurately determine when your female dog enters her fertile period during the heat cycle, helping avoid guesswork and increasing the chances of pregnancy. By measuring the level of progesterone in a blood sample, you gain precise insights into the best breeding period",
    "A C-section is the surgical delivery of puppies through an incision in the mother's abdominal wall and uterus. This is generally recommended only for dogs that are not able to deliver puppies vaginally and is not without risk to the mother and puppies.",
    "Chocolate Toxicity in dogs is a serious condition caused by theobromine and caffeine, both of which are found in chocolate. Dogs metabolize these substances much more slowly than humans, making even small amounts potentially harmful.",
    "Abdominal radiographs (X-rays) are useful in detecting a pregnancy in the last trimester of gestation (three weeks before whelping), when the bony structures of the puppies can be seen. The viability of the puppies usually can be determined, although there are situations when it could be difficult; for example, the sudden death of a full term puppy in the uterus would be difficult to detect on radiograph. Radiographs are the best way to determine the numbers of puppies in a litter."
];

let startX; // For detecting swipe start

// Highlight the correct dot based on the current image
function highlightDot() {
    a1.style.background = "#333";
    a2.style.background = "#333";
    a3.style.background = "#333";
    a4.style.background = "#333";
    a5.style.background = "#333";
    a6.style.background = "#333";
    a7.style.background = "#333";
    a8.style.background = "#333";
    a9.style.background = "#333";

    if (i === 0) a1.style.background = "#fff";
    if (i === 1) a2.style.background = "#fff";
    if (i === 2) a3.style.background = "#fff";
    if (i === 3) a4.style.background = "#fff";
    if (i === 4) a5.style.background = "#fff";
    if (i === 5) a6.style.background = "#fff";
    if (i === 6) a7.style.background = "#fff";
    if (i === 7) a8.style.background = "#fff";
    if (i === 8) a9.style.background = "#fff";
}

// Function to display the current box and hide others
function setBoxOpacity(index) {
    const boxes = [box1, box2, box3, box4, box5, box6, box7, box8, box9];

    boxes.forEach(box => {
        box.style.opacity = 0;  // Hide all boxes
    });

    boxes[index].style.opacity = 1;  // Show the current box
    highlightDot();  // Update the dots

    // Update title and description
    document.getElementById('image-title').textContent = titles[index];
    document.getElementById('image-description').textContent = descriptions[index];
    
}

// Dot click handlers
a1.onclick = function () { i = 0; setBoxOpacity(i); }
a2.onclick = function () { i = 1; setBoxOpacity(i); }
a3.onclick = function () { i = 2; setBoxOpacity(i); }
a4.onclick = function () { i = 3; setBoxOpacity(i); }
a5.onclick = function () { i = 4; setBoxOpacity(i); }
a6.onclick = function () { i = 5; setBoxOpacity(i); }
a7.onclick = function () { i = 6; setBoxOpacity(i); }
a8.onclick = function () { i = 7; setBoxOpacity(i); }
a9.onclick = function () { i = 8; setBoxOpacity(i); }

// Right navigation function
function right() {
    i = (i + 1) % 9;  // Increment and loop back to 0
    setBoxOpacity(i);
}

// Left navigation function
function left() {
    i = (i - 1 + 9) % 9;  // Decrement and loop back to the last image
    setBoxOpacity(i);
}

// Arrow key handlers for navigation
document.addEventListener("keydown", (e) => {
    if (e.keyCode == 37) {
        left();
    }
    if (e.keyCode == 39) {
        right();
    }
});

// Touch event listeners for swipe functionality on mobile
document.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;  // Get the X-coordinate where the touch starts
});

document.addEventListener("touchend", (e) => {
    let endX = e.changedTouches[0].clientX;  // Get the X-coordinate where the touch ends

    // Swipe right (show previous image)
    if (startX - endX > 50) {
        right();  // Go to the next image
    }

    // Swipe left (show next image)
    if (endX - startX > 50) {
        left();  // Go to the previous image
    }
});

// Set the first image to display on page load
window.onload = function () {
    i = 0;  // Set to the first image
    setBoxOpacity(i);  // Display the first image and highlight the first dot
}
