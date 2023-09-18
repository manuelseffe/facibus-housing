require('./bootstrap');

// JavaScript function to open a tab
function openTab(tabName) {
    var i, tabContent;
    tabContent = document.getElementsByClassName("tab-content");

    // Hide all tab content
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Show the selected tab content
    document.getElementById(tabName).style.display = "block";

    // Remove the "active" class from all tab buttons
    var tabButtons = document.getElementsByClassName("tab-button");
    for (i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active");
    }

    // Add the "active" class to the clicked tab button
    event.currentTarget.classList.add("active");
}

// Open the first tab by default
openTab('tab1');
