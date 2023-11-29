import requests
import os

def download_avatar(url, save_path):
    response = requests.get(url)
    if response.status_code == 200:
        with open(save_path, 'wb') as file:
            file.write(response.content)
        print(f"Downloaded: {save_path}")
    else:
        print(f"Failed to download: {url}")

def main():
    strikers = [
        {"name": "Matsukaze_Tenma", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/6/61/Matsukaze_Tenma_save_icon_%28S%29.png/revision/latest?cb=20230723142218"},
        {"name": "Endou_Mamoru", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/2/28/Endou_Mamoru_save_icon_%28S%29.png/revision/latest?cb=20230723150301"},
        {"name": "Endou_Mamoru_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/c/c0/Endou_Mamoru_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723153640"},
        {"name": "Gran", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/0/0d/Gran_save_icon_%28S%29.png/revision/latest?cb=20230723161046"},
        {"name": "Kiyama_Hiroto", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/d/d9/Kiyama_Hiroto_save_icon_%28S%29.png/revision/latest?cb=20230723151116"},
        {"name": "Kira_Hiroto", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/7/78/Kira_Hiroto_save_icon_%28S%29.png/revision/latest?cb=20230723154330"},
        {"name": "Gouenji_Shuuya", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/e/ea/Gouenji_Shuuya_save_icon_%28S%29.png/revision/latest?cb=20230723150349"},
        {"name": "Gouenji_Shuuya_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/9/90/Gouenji_Shuuya_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723154104"},
        {"name": "Ishido_Shuuji", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/8/80/Ishido_Shuuji_save_icon_%28S%29.png/revision/latest?cb=20230723154019"},
        {"name": "Tsurugi_Kyousuke", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/4/44/Tsurugi_Kyousuke_save_icon_%28S%29.png/revision/latest?cb=20230723142444"},
        {"name": "Shindou_Takuto", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/a/a2/Shindou_Takuto_save_icon_%28S%29.png/revision/latest?cb=20230723142331"},
        {"name": "Kidou_Yuuto", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/3/3c/Kidou_Yuuto_save_icon_%28S%29.png/revision/latest?cb=20230723150628"},
        {"name": "Kidou_Yuuto_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/b/be/Kidou_Yuuto_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723153722"},
        {"name": "Tsurugi_Yuuichi", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/0/04/Tsurugi_Yuuichi_save_icon_%28S%29.png/revision/latest?cb=20230723143941"},
        {"name": "Fubuki_Shirou", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/6/67/Fubuki_Shirou_save_icon_%28S%29.png/revision/latest?cb=20230723150708"},
        {"name": "Fubuki_Shirou_aiden", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/c/c2/Fubuki_%22Shirou%22_save_icon_%28S%29.png/revision/latest?cb=20230723161045"},
        {"name": "Fubuki_Shirou_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/3/39/Fubuki_Shirou_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723154411"},
        {"name": "Kazemaru_Ichirouta", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/5/59/Kazemaru_Ichirouta_save_icon_%28S%29.png/revision/latest?cb=20230723150432"},
        {"name": "Kazemaru_Ichirouta_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/e/e3/Kazemaru_Ichirouta_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723154158"},
        {"name": "Kabeyama_Heigorou", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/0/0c/Kabeyama_Heigorou_save_icon_%28S%29.png/revision/latest?cb=20230723150515"},
        {"name": "Someoka_Ryugo", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/2/22/Someoka_Ryuugo_save_icon_%28S%29.png/revision/latest?cb=20230723150551"},
        {"name": "Someoka_Ryugo_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/3/39/Someoka_Ryuugo_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723154533"},
        {"name": "Tachimukai_Yuuki", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/0/04/Tachimukai_Yuuki_save_icon_%28S%29.png/revision/latest?cb=20230723150853"},
        {"name": "Tsunami_Jousuke", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/e/e0/Tsunami_Jousuke_save_icon_%28S%29.png/revision/latest?cb=20230723150957"}, 
        {"name": "Tsunami_Jousuke_adult", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/b/b0/Tsunami_Jousuke_save_icon_%28adult%29_%28S%29.png/revision/latest?cb=20230723154451"},
        {"name": "Zaizen_Touko", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/8/83/Zaizen_Touko_save_icon_%28S%29.png/revision/latest?cb=20230723151038"},
        {"name": "Utsunomiya_Toramaru", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/9/92/Utsunomiya_Toramaru_save_icon_%28S%29.png/revision/latest?cb=20230723151252"},
        {"name": "Fudou_Akio", "url": "https://static.wikia.nocookie.net/inazuma-eleven/images/5/50/Fudou_Akio_save_icon_%28S%29.png/revision/latest?cb=20230723151333"},
    ]

    output_folder = "avatars"
    os.makedirs(output_folder, exist_ok=True)

    for striker in strikers:
        name = striker["name"]
        url = striker["url"]
        save_path = os.path.join(output_folder, f"{name}_avatar.png")
        download_avatar(url, save_path)

if __name__ == "__main__":
    main()
