## Fotos 

![image](https://github.com/user-attachments/assets/d8bc16fb-be74-4510-a1c8-a28f678e2d02)

![image](https://github.com/user-attachments/assets/37131fbd-cd92-4647-9166-da909c086aad)

## Rodar projeto

- Clica no botão <code> no menu repositório
- ![image](https://github.com/user-attachments/assets/d74a854b-b763-4c68-a229-e6397fbf8b0f)
- Abrir coluna codespace
- ![image](https://github.com/user-attachments/assets/d12b547f-3c24-4bfa-ad0b-83917c14a859)
- Criar ambiente no codespace
- Dentro do editor do codespace abrir terminal e rodar `composer install`
- Duplicar arquivo `.env.example` e renomear para somente `.env`
- No `.env ` troque as seguintes variáveis => APP_LOCALE=pt_BR (Pegar a validações dos campos em português)
- Rode o comando `php artisan key:generate` e `php artisan migrate` 
- rodar `php artisan serve`
