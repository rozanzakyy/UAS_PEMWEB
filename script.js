document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('userForm');
    const tableBody = document.querySelector('#userTable tbody');

    // Event 1: Submit form
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const gender = document.querySelector('input[name="gender"]:checked').value;
        const agree = document.getElementById('agree').checked;

        // Validasi input
        if (!name || !email || !gender || !agree) {
            alert('Semua field harus diisi dengan benar!');
            return;
        }

        // Kirim data ke server
        fetch('server/process.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `name=${name}&email=${email}&gender=${gender}`,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    alert('Data berhasil disimpan!');
                    addRowToTable(name, email, gender);
                    form.reset();
                } else {
                    alert('Terjadi kesalahan!');
                }
            })
            .catch((error) => console.error('Error:', error));
    });

    // Menambah baris ke tabel
    function addRowToTable(name, email, gender) {
        const newRow = tableBody.insertRow();
        newRow.innerHTML = `<td>${name}</td><td>${email}</td><td>${gender}</td>`;
    }
});
