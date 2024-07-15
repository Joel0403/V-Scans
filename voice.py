import speech_recognition as sr
from pydub import AudioSegment

def convert_to_wav(input_file, output_file):
    audio = AudioSegment.from_file(input_file)
    audio.export(output_file, format="wav")

# Replace 'input_file.mp3' with the path to your audio file
# Replace 'output_file.wav' with the desired output path
convert_to_wav('WhatsApp Audio 2023-10-14 at 12.33.15.ogg', 'joel.wav')

# def convert_voice_to_text(audio_file_path):
#     recognizer = sr.Recognizer()

#     with sr.AudioFile(audio_file_path) as source:
#         audio_data = recognizer.record(source)

#         try:
#             text = recognizer.recognize_google(audio_data)
#             return text
#         except sr.UnknownValueError:
#             return "Speech Recognition could not understand audio"
#         except sr.RequestError as e:
#             return f"Could not request results from Google Speech Recognition service; {e}"

# # Replace 'your_audio_file.wav' with the path to your voice recording
# audio_file_path = 'WhatsApp Audio 2023-10-14 at 12.33.15.ogg'
# result = convert_voice_to_text(audio_file_path)
# print("Text from voice recording:", result)
