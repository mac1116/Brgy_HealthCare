document.addEventListener('DOMContentLoaded', function() {
    function getQueryParams() {
        const params = {};
        const queryString = window.location.search.substring(1);
        const regex = /([^&=]+)=([^&]*)/g;
        let m;
        while (m = regex.exec(queryString)) {
            params[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
        }
        return params;
    }

    const params = getQueryParams();

    document.getElementById('displayId').textContent = params.id || '';
    document.getElementById('displayFirstName').textContent = params.firstname || '';
    document.getElementById('displayLastName').textContent = params.lastname || '';
    document.getElementById('displayDob').textContent = params.dob || '';
    document.getElementById('displayAddress').textContent = params.address || '';
    document.getElementById('displayGender').textContent = params.gender || '';
    document.getElementById('displayNationality').textContent = params.nationality || '';
    document.getElementById('displayCivilStatus').textContent = params.civilstatus || '';
    document.getElementById('displayEmergencyName').textContent = params.emergencyname || '';
    document.getElementById('displayEmergencyContact').textContent = params.emergencycontact || '';
    document.getElementById('displayPicture').src = params.picture || '';
});