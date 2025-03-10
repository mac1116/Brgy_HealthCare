const badgeForm = document.getElementById('badgeForm');
const downloadBadge = document.getElementById('dwnBadge');
const createAnother = document.getElementById('createAnother');
const downloadPdf = document.getElementById('dwnPdf');

document.addEventListener('DOMContentLoaded', function () {
    // Hide the form container completely
    // document.getElementById('formContainer').style.display = 'none';
});

$('#badge').css('display', 'none');
$('#badge-back').css('display', 'none');

badgeForm.addEventListener('submit', function(event){
    event.preventDefault();

    const formContainer = document.getElementById('formContainer');
    formContainer.style.display = 'none';

    const id = 'ID ' + Math.floor(Math.random() * 100).toString().padStart(4, '0');
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const middlename = document.getElementById('middlename').value;
    const dob = document.getElementById('dob').value;
    const address = document.getElementById('address').value;
    const gender = document.getElementById('gender').value;
    const nationality = document.getElementById('nationality').value;
    const civilstatus = document.getElementById('civilstatus').value;
    const pob = document.getElementById('pob').value;
    const emergencyname = document.getElementById('emergencyname').value;
    const emergencycontact = document.getElementById('emergencycontact').value;
    const picture = document.getElementById('picture').files[0];

    const reader = new FileReader();
    reader.onload = function(e) {
        const pictureUrl = e.target.result;
        $('#badgeDesignation').html(`
            <div id="badgeDesignation">
                <p id="badgeLastName">${lastname}</p>
                <p id="badgeFirstName">${firstname}</p>
                <p id="badgeMiddleName">${middlename}</p>
                <p id="badgeDOB">${dob} <p id="badgeId">${id}</p></p>
                <p id="badgeAddress"> ${address}</p>
                <img src="${pictureUrl}" class="badge-picture" alt="Picture">
            </div>
        `);

        $('#badgeDesignation2').html(`
            <p id="badgeGender">${gender}</p>
            <p id="badgeNat">${nationality}</p>
            <p id="badgeCs"> ${civilstatus}</p>
            <p id="badgePOB">${pob}</p>
            <p id="badgeEn">${emergencyname}</p>
            <p id="badgeEc">${emergencycontact}</p>
            <p id="badgeId2">${id}</p>
            <div id="qrcode2"></div>
        `);

        $('#qrcode').empty();
        $('#qrcode-back').empty();

        const baseUrl = 'http://192.168.1.99/BRGY%20HEALTH%20CENTER/id_generator/display.html'; // Replace with your actual IP address
        const qrText = `${baseUrl}?id=${encodeURIComponent(id)}&firstname=${encodeURIComponent(firstname)}&lastname=${encodeURIComponent(lastname)}&dob=${encodeURIComponent(dob)}&address=${encodeURIComponent(address)}&gender=${encodeURIComponent(gender)}&nationality=${encodeURIComponent(nationality)}&civilstatus=${encodeURIComponent(civilstatus)}&emergencyname=${encodeURIComponent(emergencyname)}&emergencycontact=${encodeURIComponent(emergencycontact)}`;

        console.log("QR Text:", qrText); // Debugging line to check the qrText value

        $('#qrcode').empty().qrcode({
            text: qrText,
            width: 128,
            height: 128
        });

        $('#qrcode-back').empty().qrcode({
            text: qrText,
            width: 220,
            height: 220
        });

        $('#badge').css('display', 'block');
        $('#badge-back').css('display', 'block');
        $('#dwnBadge').css('display', 'block');
        $('#createAnother').css('display', 'block');
        $('#dwnPdf').css('display', 'block');
    };

    if (picture) {
        reader.readAsDataURL(picture);
    } else {
        reader.onload();
    }
});

createAnother.addEventListener('click', function(){
    $('#badge').css('display', 'none');
    $('#badge-back').css('display', 'none');
    $('#dwnBadge').css('display', 'none');
    $('#createAnother').css('display', 'none');
    $('#dwnPdf').css('display', 'none');  

    document.getElementById('formContainer').style.display='block';
    document.getElementById('badgeForm').reset();
});

downloadBadge.addEventListener('click', function(e){
    e.preventDefault();

    const downloadBadgeImage = (elementId, filename) => {
        const badgeElement = document.getElementById(elementId);
        htmlToImage.toPng(badgeElement, { quality: 2, pixelRatio: 10 }) // Increase quality and pixel ratio for 4K resolution
        .then(function (dataUrl) {
            const link = document.createElement('a');
            link.download = filename;
            link.href = dataUrl;
            link.click();
        })
        .catch(function (error){
            console.error('Error converting HTML to image:', error);
        });
    };

    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;

    downloadBadgeImage('badge', `${firstname}_${lastname}_badge1.png`);
    downloadBadgeImage('badge-back', `${firstname}_${lastname}_badge2.png`);
});

downloadPdf.addEventListener('click', function(e){
    e.preventDefault();

    const downloadBadgePdf = async () => {
        const badgeElement1 = document.getElementById('badge');
        const badgeElement2 = document.getElementById('badge-back');

        try {
            const dataUrl1 = await htmlToImage.toPng(badgeElement1, { quality: 2, pixelRatio: 10});
            const dataUrl2 = await htmlToImage.toPng(badgeElement2, { quality: 2, pixelRatio: 10});

            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF('p', 'pt', 'a4');
            const badgeWidth = 150; // Set the width of the badge
            const badgeHeight = 250; // Set the height of the badge

            pdf.addImage(dataUrl1, 'PNG', 20, 20, badgeHeight, badgeWidth ); // Position the first badge
            pdf.addImage(dataUrl2, 'PNG', 20, 180, badgeHeight,badgeWidth ); // Position the second badge beside the first one

            const firstname = document.getElementById('firstname').value;
            const lastname = document.getElementById('lastname').value;

            pdf.save(`${firstname}_${lastname}_badges.pdf`);
        } catch (error) {
            console.error('Error generating PDF:', error);  
        }
    };

    downloadBadgePdf();
});