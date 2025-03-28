function menu(){
    const menuElem = document.querySelector('.menu-wrapper');
    const menuBtn = document.querySelector('.menu-button');

    mediaQuery = window.matchMedia('(max-width: 800px)');

    if(menuBtn.style.left == '0%'){
        if(mediaQuery.matches){
            menuElem.style.display = 'block';
            menuBtn.style.left = '80%';
        } else {
            menuElem.style.display = 'block';
            menuBtn.style.left = '28%';
        }
    } else {
        menuElem.style.display = 'none';
        menuBtn.style.left = '0%';
    }
}
// Just a comment line that you must delete
document.addEventListener('DOMContentLoaded', () => {
    const popup = document.getElementById('popup');
    const popupContent = document.querySelector('.popup-content');
    const closeButton = document.getElementById('closePopup');

    function showPopup() {
        popup.style.display = 'block';
    }

    closeButton.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    const buttons = document.querySelectorAll('.openPopup');
    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            const category = button.getAttribute('data-table');
            const municipality = button.getAttribute('data-municipality');

            fetch('../pages/fetch_records.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `municipality=${municipality}&category=${category}`
            })
                .then(response => response.json())
                .then(data => {
                    popupContent.innerHTML = '';
                    if (data.length > 0) {
                        data.forEach(item => {
                            const record = document.createElement('div');
                            record.classList.add('popup-record');
                            record.innerHTML = `
                            <h3 class="texts">${item.Institution}</h3>
                            <p class="texts">Contact: ${item['Contact Information']}</p>
                            <button class="gmaps" onclick="showMap()"><img src="icons/Location.png" alt="Location icon" width="30" height="30"></button>
                            <div class="map-modal" id="mapModal">
                            <button class="map-modal-close" onclick="closeMap()">×</button>
                            <iframe src="${item['URL from Google Maps']}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <button class="copy-btn" onclick="copyToClipboard('${item['Contact Information']}')"><img src="icons/Copy.png" alt="Copy icon" width="30" height="30"></button>
                            <button class="call-btn" onclick="window.location.href='tel:${item['Contact Information']}'"><img src="icons/Call.png" alt="Call icon" width="30" height="30"></button>
                        `;
                            popupContent.appendChild(record);
                        });
                    } else {
                        popupContent.innerHTML = '<p class="norecord">No records found.</p>';
                    }
                    showPopup();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    popupContent.innerHTML = '<p>An error occurred.</p>';
                    showPopup();
                });
        });
    });

    document.addEventListener('click', (event) => {
        if (!popup.contains(event.target) && !event.target.classList.contains('openPopup')) {
            popup.style.display = 'none';
        }
    });
});

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('Copied to clipboard!');
    }).catch(err => {
        console.error('Error copying text: ', err);
    });
}
function showMap() {
    document.getElementById('mapModal').style.display = 'block';
}
function closeMap() {
    document.getElementById('mapModal').style.display = 'none';
}
