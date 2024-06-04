// Import statements dihapus karena tidak diperlukan dalam JavaScript biasa
const mysql = require("mysql");

// Buat koneksi ke database
const connection = mysql.createConnection({
	host: "syaifur.id",
	user: "u1429916_hilman",
	password: "JJx,gS(V*84F",
	database: "u1429916_hilman",
});
// State initialization
let value = null;
let message = null;
let previousChats = [];
let currentTitle = null;

connection.connect();

// Buat query untuk mengambil data dari database
const query = "SELECT berat, tinggi, jenis_kelamin  FROM master_patient";

// Function to create a new chat
const createNewChat = () => {
	message = null;
	// value = "";
	currentTitle = null;
};

// Function to handle a click event
const handleClick = (uniqueTitles) => {
	currentTitle = uniqueTitles;
	message = null;
	// value = "";
};

// Function to fetch messages
const getMessages = async () => {
	const options = {
		method: "POST",
		body: JSON.stringify({
			message: value,
		}),
		headers: {
			"Content-Type": "application/json",
		},
	};
	try {
		const response = await fetch("http://localhost:8001/completions", options);
		const data = await response.json();
		message = data.choices[0].message;
	} catch (error) {
		console.error(error);
	}
};

// Function to update previous chats
const updatePreviousChats = () => {
	console.log(currentTitle, value, message);
	if (!currentTitle && value && message) {
		currentTitle = value;
	}
	if (currentTitle && value && message) {
		previousChats.push({
			title: currentTitle,
			role: "user",
			content: value,
		});
		previousChats.push({
			title: currentTitle,
			role: message.role,
			content: message.content,
		});
		// saveContentToDatabase(message.content);
	}
	console.log(previousChats);
};

// Function to filter current chat
const getCurrentChat = () => {
	return previousChats.filter((previousChat) => previousChat.title === currentTitle);
};

// Function to get unique titles
const getUniqueTitles = () => {
	return Array.from(new Set(previousChats.map((previousChat) => previousChat.title)));
};

// Render the view (replace with your HTML or output logic)
const renderView = () => {
	// Replace this with the appropriate HTML rendering for your use case
	console.log(getCurrentChat());
	console.log(getUniqueTitles());
};

// Call functions as needed

connection.query(query, (error, results, fields) => {
	if (error) {
		console.error("Error:", error);
		return;
	}

	// Ambil data dari hasil query
	const { berat, tinggi, jenis_kelamin } = results[0];

	// Buat pesan berdasarkan data dari database
	value = `Konteks: Anda adalah seorang tenaga kesehatan yang sedang bekerja di posyandu. Anda diminta untuk mendata anak-anak yang mengalami stunting dan normal berdasarkan umur, tinggi badan, berat badan, usia, dan jenis kelamin. Refrensi yang Anda gunakan adalah Peraturan Menteri Kesehatan Republik Indonesia Nomor 2 Tahun 2020 tentang Standar Antropometri Anak. Jika ada anak yang Anda data memiliki berat badan ${berat} kg, tinggi badan ${tinggi} cm, dan jenis kelamin ${jenis_kelamin}, menurut Anda apakah anak tersebut mengalami stunting? Atau normal? Jelaskan alasannya secara langsung dalam 3 kalimat.`;
});

// const saveContentToDatabase = (content) => {
// 	const querysave = "INSERT INTO analisa (content) VALUES (?)";
// 	connection.query(querysave, [content], (error, results, fields) => {
// 		if (error) {
// 			console.error("Error:", error);
// 			return;
// 		}
// 		console.log("Data berhasil disimpan ke database.");
// 	});
// };

function analisaData() {
	createNewChat();
	handleClick("Stunting");
	getMessages();
	updatePreviousChats();
	renderView();
}

connection.end();
