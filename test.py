import requests

base_url = input("Base URL'yi girin: ").strip()

dosya_adi = input("Dosya adını girin: ").strip()

istem = input(
    "POST isteği yapmak için 'P', GET isteği yapmak için 'G' tuşlayın: ").strip().upper()

if istem not in ["P", "G"]:
    print("Geçersiz giriş. 'P' veya 'G' girin.")
    exit()


with open(dosya_adi, 'r') as dosya:
    for istek in dosya:
        istek = istek.strip()

        tam_url = f"{base_url}{istek}"

        if istem == "P":
            cevap = requests.post(tam_url)
        else:
            cevap = requests.get(tam_url)

        print(f"Gönderilen İstek: {istek}")
        print(f"Durum Kodu: {cevap.status_code}")
        print(f"Durum Metni: {cevap.reason}")
        print("-" * 50)
