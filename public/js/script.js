function openPage(evt, pageName, url) {
    var i, tablinks;

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("menu-item");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Add an "active" class to the button that opened the tab
    evt.currentTarget.className += " active";

    // Use AJAX to load the content of the page
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('mainContent').innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}
function openTab(evt, pageName, url) {
    var i, tablinks;

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tab-generate-btn");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Add an "active" class to the button that opened the tab
    evt.currentTarget.className += " active";

    // Use AJAX to load the content of the page
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('createnewmainContent').innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}
function changeButtonColorBasedOnURL() {
    var button = document.getElementById('createnewScenarioss');
    var path = window.location.pathname;

    if (path === '/createnew/personnages') {
        button.style.backgroundColor = '#4CAF50'; // Green
        button.style.color = 'white';
    } else if (path === '/createnew/personnage') {
        button.style.backgroundColor = '#008CBA'; // Blue
        button.style.color = 'white';
    } else {
        button.style.backgroundColor = '#f44336'; // Red for other pages
        button.style.color = 'white';
    }
}



document.addEventListener('DOMContentLoaded', function () {
    const tabTitles = document.querySelectorAll('.widget-tab-title');
    const tabPanes = document.querySelectorAll('.widget-tab-pane');

    tabTitles.forEach(title => {
        title.addEventListener('click', function () {
            tabTitles.forEach(t => t.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));

            title.classList.add('active');
            document.getElementById(title.getAttribute('data-tab')).classList.add('active');
        });
    });

    // Activate the first tab by default
    tabTitles[0].classList.add('active');
    tabPanes[0].classList.add('active');
});

function togglePopup() {
    var popup = document.getElementById('save-prompt-modal');
    popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
}
function formatText(command) {
    document.execCommand(command, false, null);
}


