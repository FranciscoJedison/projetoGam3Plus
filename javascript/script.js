document.getElementById('searchForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    
    const query = document.getElementById('searchInput').value;
    document.getElementById('result').innerHTML = 'Buscando...';

    try {
        // Simulando uma busca com API (aqui você pode adicionar sua lógica de requisição)
        const response = await fetch(`https://api.exemplo.com/search?q=${query}`);
        const data = await response.json();
        
        // Exibindo o resultado (você pode personalizar esta lógica)
        document.getElementById('result').innerHTML = `Resultados encontrados: ${data.resultados}`;
    } catch (error) {
        document.getElementById('result').innerHTML = 'Erro ao buscar, tente novamente.';
        console.error('Erro:', error);
    }
});
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('open');
});



const searchBar = document.getElementById("search-bar");
const productItems = document.querySelectorAll(".product-item");

// Função para filtrar os itens da lista com base no termo de pesquisa
function filterProducts(searchTerm) {
    productItems.forEach(item => {
        // Verifica se o termo de pesquisa está presente no texto do item
        if (item.textContent.toLowerCase().includes(searchTerm.toLowerCase())) {
            item.style.display = "block"; // Mostra o item
        } else {
            item.style.display = "none"; // Oculta o item
        }
    });
}

// Evento para capturar a digitação na barra de pesquisa
searchBar.addEventListener("input", (e) => {
    filterProducts(e.target.value);
});

//função para embaralhar a lista de produtos
function embaralharProdutos() {
    const lista = document.getElementById('product-grid');
    const produtos = Array.from(lista.children);
    
    // Embaralha a lista de produtos
    produtos.sort(() => Math.random() - 0.5);
    
    // Reanexa os produtos embaralhados ao elemento pai
    produtos.forEach(produto => lista.appendChild(produto));
}

// Chama a função para embaralhar os produtos ao carregar a página
window.onload = embaralharProdutos;
document.addEventListener('DOMContentLoaded', embaralharProdutos);


//carousel com autoslide
let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    function updateCarousel() {
        const offset = -currentIndex * (100 / 3); // Calcula o deslocamento baseado em 3 imagens visíveis
        document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
    }

    function autoSlide() {
        currentIndex = (currentIndex + 1) % (totalItems - 2); // Muda de 0 a (totalItems - 3) para evitar ultrapassar
        updateCarousel();
    }

    // Inicia o auto slide a cada 3 segundos
    setInterval(autoSlide, 3000);









document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('product-item');
    const productDetails = {
    1: { nome: 'Cyberpunk 2077', descricao: 'Ação', preco: 199.90 },
    2: { nome: 'Persona 5', descricao: 'RPG', Preço: 250 },
    3: { nome: 'Final Fantasy 16', Descrição: 'Aventura', Preco: 299.90 },
    4: { nome: 'Monster Hunter World', Descrição: 'Ação', Preco: 129.90 }
    };
    
    const product = productDetails[productId];
    if (product) {
    document.getElementById('car-details').innerHTML = `
    <p>Nome: ${product.nome}</p>
    <p>Modelo: ${product.descricao}</p>
    <p>Ano: ${product.preco}</p>
    
    `;
    }
    });

const produtos = [
    {
        id: 1,
        nome: "Cyberpunk 2077",
        descricao: "Cyberpunk 2077 is a 2020 action role-playing game developed by the Polish studio CD Projekt Red, and published by CD Projekt, and based on Mike Pondsmith's Cyberpunk tabletop game series. The plot is set in the fictional metropolis of Night City, California, within the dystopian Cyberpunk universe.",
        imagem: "imagens/cyberpunk2077.png"
    },
    {
        id: 2,
        nome: "Persona 5 Royal",
        descricao: "Persona is a RPG series set in modern-day Japan that is acclaimed for its narrative style of confronting everyday realities such as forging friendships and romances, alongside supernatural and paranormal themes, including uncovering and solving mysterious rumors and various urban legends.",
        imagem: "imagens/p5royal.png"
    },
    {
        id: 3,
        nome: "Final Fantasy 16",
        descricao: "Final Fantasy XVI is a 2023 action role-playing game developed and published by Square Enix. The sixteenth main installment in the Final Fantasy series, it was released for the PlayStation 5 in June 2023, with a Windows version released in September 2024.",
        imagem: "imagens/ff16.png"
    },
    {
        id: 4,
        nome: "Monster Hunter World",
        descricao: "Monster Hunter: World is a 2018 action role-playing game developed and published by Capcom. The fifth mainline installment in the Monster Hunter series, it was released worldwide for PlayStation 4 and Xbox One in January 2018, with a Windows version following in August 2018.",
        imagem: "imagens/mhworld.png"
    },
    {
        id: 5,
        nome: "Monster Hunter Rise",
        descricao: "Monster Hunter Rise is a 2021 action role-playing game developed and published by Capcom for the Nintendo Switch. It was released worldwide in March 2021, with a Windows port released in January 2022 and ports for PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X/S were released in January 2023.",
        imagem: "imagens/mhrise1.png"
    },
    {
        id: 6,
        nome: "Elden Ring",
        descricao: "Elden Ring é um jogo eletrônico de RPG de ação, jogado de uma perspectiva em terceira pessoa e apresenta elementos semelhantes aos encontrados em seus antecessores, a série Souls, além de Bloodborne e Sekiro: Shadows Die Twice, com uma jogabilidade focada em combate e exploração.",
        imagem: "imagens/eldenring.png" 
    },
    {
        id: 7,
        nome: "Dark Souls Remastered",
        descricao: "Dark Souls Remastered is a remastered version of the first game in FromSoftware's Dark Souls series, it also marks the first appearance of any games from the series on a Nintendo platform. The remastered version also comes with the DLC, 'Arotias of the Abyss', in the base game.",
        imagem: "imagens/dsremastered.png"
    },
    {
        id: 8,
        nome: "Dark souls 2 Scholar of the First Sin",
        descricao: "Dark Souls II: Scholar of the First Sin is a special edition of Dark Souls II, released on PC April 1st, April 3rd in Europe and released in North America on April 7th, 2015 for the Xbox 360, Xbox One, PS3, PS4.",
        imagem: "imagens/ds2.png"
    },
    {
        id: 9,
        nome: "Dark souls 3",
        descricao: "Dark Souls III is a 2016 action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment for Microsoft Windows, PlayStation 4, and Xbox One. The third and final entry in the Dark Souls series, the game follows an unkindled character on a quest to prevent the end of the world.",
        imagem: "imagens/ds33.png"
    },
    {
        id: 10,
        nome: "Nier:Automata",
        descricao: "Nier: Automata is a 2017 action role-playing game developed by PlatinumGames and published by Square Enix. It is a sequel to Nier, itself a spin-off of and sequel to the Drakengard series.",
        imagem: "imagens/nierautomata.png"
    },
    {
        id: 11,
        nome: "Silent Hill 2",
        descricao: "Silent Hill 2 is a 2024 survival horror game developed by Bloober Team and published by Konami Digital Entertainment. It is a remake of the 2001 video game Silent Hill 2, originally developed by Team Silent, a group within Konami Computer Entertainment Tokyo.",
        imagem: "imagens/silenthill2.png"
    },
    {
        id: 12,
        nome: "Tekken 8",
        descricao: "Tekken 8 is a 2024 fighting game developed by Bandai Namco Studios and Arika and published by Bandai Namco Entertainment. It is the eighth canon release in the Tekken series and the first one to debut on home systems instead of arcades.",
        imagem: "imagens/tekken8.png"
    },
    {
        id: 13,
        nome: "Street Fighter VI",
        descricao: "Street Fighter 6[a][b] is a 2023 fighting game developed and published by Capcom. It is the sixth main entry in the Street Fighter franchise, following Street Fighter V (2016), and was released for PlayStation 4, PlayStation 5, Windows and Xbox Series X/S, while an arcade version, named Street Fighter 6 Type Arcade, was published by Taito for Japanese arcade cabinets later.",
        imagem: "imagens/sf66.png"
    },
    {
        id: 14,
        nome: "Persona 3 Reload",
        descricao: "Persona 3 Reload is a 2024 role-playing video game by Atlus. Reload is a remake of Persona 3, the fourth main installment of the Persona series, itself a part of the larger Megami Tensei franchise.",
        imagem: "imagens/p3reload.png"
    },
    {
        id: 15,
        nome: "Hollow Knight",
        descricao: "Descrição do Produto 3Hollow Knight is a 2017 Metroidvania video game developed and published by independent developer Team Cherry. The player controls the Knight, an insectoid warrior exploring Hallownest, a fallen kingdom plagued by a supernatural disease. ",
        imagem: "imagens/hollowknight.png"
    },
    {
        id: 16,
        nome: "Dead Cells",
        descricao: "Dead Cells is a 2018 roguelike-Metroidvania game developed by Motion Twin and Evil Empire, and published by Motion Twin. The player takes the role of an amorphous creature called the Prisoner. As the Prisoner, the player must fight their way out of a diseased island in order to slay the island's King.",
        imagem: "imagens/deadcells.png"
    },
    {
        id: 17,
        nome: "Hades",
        descricao: "Hades is a 2020 roguelike action role-playing game developed and published by Supergiant Games. It was released for macOS, Nintendo Switch, and Windows following an early access release in December 2018. It was later released for PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X/S in August 2021, and was released for iOS in March 2024 through Netflix Games.",
        imagem: "imagens/hades.png"
    },
    {
        id: 18,
        nome: "Hades 2",
        descricao: "Hades II is an upcoming roguelike action role-playing game video game developed and published by Supergiant Games, serving as a sequel to Hades.",
        imagem: "imagens/hades2.png"
    },
    {
        id: 19,
        nome: "Baldur's Gate 3",
        descricao: "Baldur's Gate 3 is a 2023 role-playing video game developed and published by Larian Studios. It is the third main installment of the Baldur's Gate series, based on the tabletop fantasy role-playing game Dungeons & Dragons.",
        imagem: "imagens/bg3.png"
    },
    {
        id: 20,
        nome: "Blasphemous",
        descricao: "Blasphemous is a Metroidvania video game developed by Spanish studio The Game Kitchen and published by Team17. The game was released for Microsoft Windows, PlayStation 4, Xbox One, and Nintendo Switch on 10 September 2019, with Warp Digital handling the console ports.",
        imagem: "imagens/blasphemous.png"
    },
    {
        id: 21,
        nome: "Cuphead",
        descricao: "Cuphead is a 2017 run and gun game developed and published by Studio MDHR. The game follows its titular teacup-headed character and his brother Mugman, as they make a deal with the Devil to pay casino losses by repossessing the souls of runaway debtors.",
        imagem: "imagens/cuphead.png"
    }
];

// Função para abrir o modal e exibir os dados do produto
function abrirModal(produtoId) {
    // Encontrando o produto pelo ID
    const produto = produtos.find(p => p.id === produtoId);

    if (produto) {
        // Atualizando o conteúdo do modal com os atributos do produto
        document.getElementById("produtoNome").innerText = produto.nome;
        document.getElementById("produtoDescricao").innerText = produto.descricao;
        document.getElementById("produtoImagem").src = produto.imagem;

        // Exibindo o modal
        document.getElementById("meuModal").style.display = "block";
    }
}

// Função para fechar o modal
function fecharModal() {
    document.getElementById("meuModal").style.display = "none";
}

// Fechar o modal quando o usuário clica fora do conteúdo
window.onclick = function(event) {
    const modal = document.getElementById("meuModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//funções do carrinho
document.addEventListener("DOMContentLoaded", () => {
    const cartItemsContainer = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
  
    // Carrega o carrinho do localStorage
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
  
    // Atualiza o carrinho na interface e no localStorage
    function updateCart() {
      // Limpa o conteúdo atual
      cartItemsContainer.innerHTML = "";
      let total = 0;
  
      // Atualiza cada item no carrinho
      cart.forEach((item, index) => {
        const listItem = document.createElement("li");
        listItem.textContent = `${item.name} - R$ ${item.price.toFixed(2)} x ${item.quantity}`;
        
        const removeButton = document.createElement("button");
        removeButton.textContent = "Remover";
        removeButton.onclick = () => removeFromCart(index);
        listItem.appendChild(removeButton);
  
        cartItemsContainer.appendChild(listItem);
        total += item.price * item.quantity;
      });
  
      cartTotal.textContent = total.toFixed(2);
      localStorage.setItem("cart", JSON.stringify(cart));
    }
  
    // Função para adicionar um item ao carrinho
    function addToCart(product) {
      const existingProductIndex = cart.findIndex(item => item.id === product.id);
      if (existingProductIndex > -1) {
        // Se o produto já está no carrinho, incrementa a quantidade
        cart[existingProductIndex].quantity += 1;
      } else {
        // Adiciona o produto como um novo item no carrinho
        cart.push({ ...product, quantity: 1 });
      }
      updateCart();
    }
  
    // Função para remover um item do carrinho
    function removeFromCart(index) {
      cart.splice(index, 1);
      updateCart();
    }
  
    // Event listeners para os botões "Adicionar ao carrinho"
    document.querySelectorAll(".add-to-cart").forEach(button => {
      button.addEventListener("click", () => {
        const productElement = button.closest(".product-item");
        const product = {
          id: productElement.getAttribute("data-id"),
          name: productElement.getAttribute("data-name"),
          price: parseFloat(productElement.getAttribute("data-price"))
        };
        addToCart(product);
      });
    });
  
    // Inicializa o carrinho exibido
    updateCart();
  });
  
/*
// Função para enviar os dados do carrinho para o PHP
function finalizarCompra() {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    
    fetch("finalizar_compra.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(cart)
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert(data.message + "\nTotal: R$ " + data.total.toFixed(2));
            // Limpa o carrinho após a finalização
            localStorage.removeItem("cart");
            window.location.href = "finalizar_compra.php";
        } else {
            alert("Erro ao finalizar compra: " + data.message);
        }
    })
    .catch(error => console.error("Erro ao enviar o carrinho:", error));
}

// Event listener para o botão "Finalizar Compra"
document.querySelector("a[href='finalizar_compra.php'] button").addEventListener("click", (e) => {
    e.preventDefault(); // Evita o redirecionamento imediato
    finalizarCompra();
});
*/

document.getElementById("finalizar-compra").addEventListener("click", (event) => {
    event.preventDefault(); // Impede o redirecionamento padrão
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    fetch("finalizar_compra.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(cart),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.status === "success") {
                // Redirecionar para a página de pagamento
                window.location.href = "finalizar_compra.php";
            } else {
                alert("Erro ao salvar o carrinho: " + data.message);
            }
        })
        .catch((error) => console.error("Erro:", error));
});

