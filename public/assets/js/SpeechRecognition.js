import React, { useState, useEffect } from "react";
import "./SpeechRecognition.css";
var kalimat;
const SpeechRecognition = () => {
  const [transcript, setTranscript] = useState("");
  const [listening, setListening] = useState(false);
  const [stuntingDetected, setStuntingDetected] = useState(false);

  useEffect(() => {
    const recognition = new window.webkitSpeechRecognition();
    recognition.lang = "id-ID";

    recognition.onresult = (event) => {
      const result = event.results[event.results.length - 1];
      const text = result[0].transcript;
      const transcript = Array.from(event.results)
        .map((result) => result[0])
        .map((result) => result.transcript)
        .join("");
      if (
        (transcript.includes("itu") || transcript.includes("dimaksud") || transcript.includes("arti")) &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Stunting adalah kondisi dimana anak mengalami pertumbuhan tubuh yang terhambat atau lambat karena kekurangan gizi kronis dalam jangka panjang. Hal ini dapat terjadi pada anak-anak di bawah usia 5 tahun.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("mencegah") &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Cara mencegah stunting pada anak dengan memberikan ASI eksklusif selama 6 bulan, memberikan makanan pendamping ASI yang seimbang, meningkatkan kualitas dan kuantitas makanan, memberikan stimulasi pada tumbuh kembang anak.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("gizi") &&
        transcript.includes("buruk") &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Stunting dan gizi buruk adalah kondisi terkait kekurangan gizi, namun berbeda jenis kekurangan gizinya. Stunting disebabkan oleh kekurangan gizi kronis, sedangkan gizi buruk bisa disebabkan oleh kekurangan gizi akut.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("faktor") &&
        transcript.includes("penyebab") &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Beberapa faktor penyebab stunting pada anak antara lain: Kurangnya asupan gizi yang adekuat, Kurangnya perawatan kesehatan, Faktor lingkungan,Faktor sosial-ekonomi, Faktor genetik.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("indikator") ||
        (transcript.includes("mengalami") && (transcript.includes("stunting") || transcript.includes("stanting")))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Indikator seorang anak mengalami stunting adalah: Tinggi badan anak yang lebih pendek, Berat badan anak yang tidak sesuai dengan tinggi badannya , Perkembangan fisik yang lambat dibandingkan dengan anak-anak seusianya.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        (transcript.includes("berbahaya") || transcript.includes("bahaya")) &&
        transcript.includes("kesehatan") &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Ya, Stunting membahayakan kesehatan anak dan berdampak jangka panjang pada masa dewasa. Anak stunting lebih rentan terhadap berbagai penyakit kronis dan gangguan mental dan kognitif.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("penanganan") &&
        transcript.includes("khusus") &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Penanganan khusus dapat diberikan kepada anak yang mengalami stunting, seperti pemberian asupan gizi yang cukup dan seimbang, suplemen gizi, makanan tambahan, stimulasi tumbuh kembang,  dan dukungan sosial. ";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("menu") ||
        (transcript.includes("Menu") && (transcript.includes("stunting") || transcript.includes("stanting")))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Menu terbaik untuk anak stunting adalah makanan yang mengandung nutrisi lengkap dan seimbang. Contohnya telur, daging, ikan, sayuran hijau, buah-buahan, dan produk olahan susu.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("Perilaku") ||
        (transcript.includes("perilaku") && transcript.includes("orang tua")) ||
        (transcript.includes("orangtua") && (transcript.includes("stunting") || transcript.includes("stanting")))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Orang tua dapat mencegah stunting pada anak dengan cara menyusui secara eksklusif selama 6 bulan, memberikan MP-ASI yang seimbang, meningkatkan kualitas makanan, serta memberikan stimulasi pada tumbuh kembang anak.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else if (
        transcript.includes("mencegah") &&
        (transcript.includes("stunting") || transcript.includes("stanting"))
      ) {
        const synth = window.speechSynthesis;
        kalimat =
          "Cara mencegah stunting pada anak adalah dengan memberikan ASI secara eksklusif selama 6 bulan, memberikan makanan pendamping ASI yang seimbang, meningkatkan kualitas dan kuantitas makanan, serta memberikan stimulasi pada tumbuh kembang anak.";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      } else {
        const synth = window.speechSynthesis;
        kalimat = "Maaf saya belum mengetahui informasi tersebut, silahkan menghubungi dokter atau instansi terkait";
        const utterance = new SpeechSynthesisUtterance(kalimat);
        utterance.lang = "id-ID";
        synth.speak(utterance);
        setStuntingDetected(true);
      }
      setTranscript(transcript);

      setTranscript(text);
    };

    recognition.onend = () => {
      setListening(false);
    };

    if (listening) {
      recognition.start();
    }

    return () => {
      recognition.stop();
    };
  }, [listening]);

  const handleClick = () => {
    setTranscript("");
    setStuntingDetected(false);
    setListening(true);
  };

  return (
    <div className="container card speech-recognition">
      <div className="title-container">
        <img
          className="title-img"
          src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Lambang_Kota_Semarang.png"
          alt="logo-pemkot"
        />
        <h1 className="title">Robot Informasi Stunting</h1>
      </div>
      <p className="transcript">{transcript}</p>
      <button className="button" onClick={handleClick} disabled={listening}>
        {listening ? "Mendengarkan..." : "Mulai Bertanya"}
      </button>
      {stuntingDetected && (
        <div className="response-container">
          <p className="response">{kalimat}</p>
        </div>
      )}
    </div>
  );
};

export default SpeechRecognition;
