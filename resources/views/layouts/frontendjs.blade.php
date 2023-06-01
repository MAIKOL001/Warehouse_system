 <script>
const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
  const li = item.parentElement;

  item.addEventListener('click', function() {
    allSideMenu.forEach(i => {
      i.parentElement.classList.remove('active');
    });

    const isActive = li.classList.contains('active');
    if (!isActive) {
      li.classList.add('active');
    } else {
      li.classList.remove('active');
    }

    closeOpenDropdowns(); // Close open dropdowns when a link is clicked
  });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function() {
  sidebar.classList.toggle('hide');
  closeOpenDropdowns(); // Close open dropdowns when sidebar is toggled
});

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function(e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle('show');
    if (searchForm.classList.contains('show')) {
      searchButtonIcon.classList.replace('bx-search', 'bx-x');
    } else {
      searchButtonIcon.classList.replace('bx-x', 'bx-search');
    }
  }
});

// Get all dropdown toggle links
const dropdownToggleLinks = document.querySelectorAll('.dropdown-toggle');

// Add click event listener to each dropdown toggle link
dropdownToggleLinks.forEach(link => {
  const dropdownMenu = link.nextElementSibling;
  dropdownMenu.style.display = 'none'; // Hide dropdown menu items by default

  link.addEventListener('click', function(e) {
    e.preventDefault();
    closeOpenDropdowns(); // Close other open dropdowns

    const isDropdownOpen = dropdownMenu.style.display === 'block';
    dropdownMenu.style.display = isDropdownOpen ? 'none' : 'block';
  });
});

// Function to close all open dropdowns except the currently active one
function closeOpenDropdowns() {
  dropdownToggleLinks.forEach(link => {
    const dropdownMenu = link.nextElementSibling;
    if (dropdownMenu.style.display === 'block' && !link.parentElement.classList.contains('active')) {
      dropdownMenu.style.display = 'none';
    }
  });
}

if (window.innerWidth < 768) {
  sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace('bx-x', 'bx-search');
  searchForm.classList.remove('show');
}

window.addEventListener('resize', function() {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
  }
});

const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function() {
  if (this.checked) {
    document.body.classList.add('dark');
  } else {
    document.body.classList.remove('dark');
  }
});

</script> --}}
