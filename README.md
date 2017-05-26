[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Marvel/functions?utm_source=RapidAPIGitHub_MarvelFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Marvel Package
Marvel
* Domain: [Marvel](http://marvel.com)
* Credentials: publicKey, privateKey

## How to get credentials: 
0. Go to [Marvel website](http://marvel.com)
1. Register or log in
2. Go to [Developers page](https://developer.marvel.com/account) to get your keys

## Marvel.getCharacters
Fetches lists of comic characters with optional filters. 

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| name          | String     | Return only characters matching the specified full character name (e.g. Spider-Man).
| nameStartsWith| String     | Return characters with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only characters which have been modified since the specified date.
| comics        | Array      | Return only characters which appear in the specified comics (accepts an array of ids).
| series        | Array      | Return only characters which appear the specified series (accepts an array of ids).
| events        | Array      | Return only characters which appear the specified events (accepts an array of ids).
| stories       | Array      | Return only characters which appear the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getSingleCharacter
This method fetches a single character resource. It is the canonical URI for any character resource provided by the API.

| Field      | Type       | Description
|------------|------------|----------
| publicKey  | credentials| Public api key obtained from Marvel
| privateKey | credentials| Private api key obtained from Marvel
| characterId| Number     | A single character id.

## Marvel.getComicsByCharacter
Fetches lists of comics containing a specific character, with optional filters.

| Field            | Type       | Description
|------------------|------------|----------
| publicKey        | credentials| Public api key obtained from Marvel
| privateKey       | credentials| Private api key obtained from Marvel
| characterId      | Number     | A single character id.
| format           | String     | Filter by the issue format (e.g. comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| formatType       | String     | Filter by the issue format type (comic or collection).
| noVariants       | Boolean    | Exclude variant comics from the result set.
| dateDescriptor   | String     | Return comics within a predefined date range. Values: lastWeek, thisWeek, nextWeek, thisMonth
| dateRange        | Array      | Return comics within a predefined date range. Dates must be specified as array. Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
| title            | String     | Return only issues in series whose title matches the input.
| titleStartsWith  | String     | Return only issues in series whose title starts with the input.
| startYear        | String     | Return only issues in series whose start year matches the input.
| issueNumber      | String     | Return only issues in series whose issue number matches the input.
| diamondCode      | String     | Filter by diamond code.
| digitalId        | Number     | Filter by digital comic id.
| upc              | String     | Filter by UPC.
| isbn             | String     | Filter by ISBN.
| ean              | String     | Filter by EAN.
| issn             | String     | Filter by ISSN.
| hasDigitalIssue  | Boolean    | Include only results which are available digitally.
| modifiedSince    | String     | Return only comics which have been modified since the specified date.
| creators         | Array      | Return only comics which feature work by the specified creators (accepts an array of ids).
| series           | Array      | Return only comics which are part of the specified series (accepts an array of ids).
| events           | Array      | Return only comics which take place in the specified events (accepts an array of ids).
| stories          | Array      | Return only comics which contain the specified stories (accepts an array of ids).
| sharedAppearances| String     | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear).
| collaborators    | String     | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work).
| orderBy          | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: focDate, onsaleDate, title, issueNumber, modified
| limit            | Number     | Limit the result set to the specified number of resources.
| offset           | Number     | Skip the specified number of resources in the result set.

## Marvel.getEventsByCharacter
Fetches lists of events containing a specific character, with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| characterId   | Number     | A single character id.
| name          | String     | Filter the event list by name.
| nameStartsWith| String     | Return events with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only events which have been modified since the specified date.
| creators      | Array      | Return only events which feature work by the specified creators (accepts an array of ids).
| series        | Array      | Return only events which are part of the specified series (accepts an array of ids).
| comics        | Array      | Return only events which take place in the specified comics (accepts an array of ids).
| stories       | Array      | Return only events which contain the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, startDate modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getSeriesByCharacter
Fetches lists of series containing a specific character, with optional filters.

| Field          | Type       | Description
|----------------|------------|----------
| publicKey      | credentials| Public api key obtained from Marvel
| privateKey     | credentials| Private api key obtained from Marvel
| characterId    | Number     | A single character id.
| title          | String     | Return only issues in series whose title matches the input.
| titleStartsWith| String     | Return only issues in series whose title starts with the input.
| startYear      | String     | Return only issues in series whose start year matches the input.
| modifiedSince  | String     | Return only series which have been modified since the specified date.
| creators       | Array      | Return only series which feature work by the specified creators (accepts an array of ids).
| comics         | Array      | Return only series which contain the specified comics (accepts an array of ids).
| events         | Array      | Return only series which have comics that take place during the specified events (accepts an array of ids).
| stories        | Array      | Return only series which contain the specified stories (accepts an array of ids).
| seriesType     | String     | Filter the series by publication frequency type. Values: collection, one shot, limited, ongoing
| contains       | String     | Return only series containing one or more comics with the specified format. Values: comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| orderBy        | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: title, startYear, modified
| limit          | Number     | Limit the result set to the specified number of resources.
| offset         | Number     | Skip the specified number of resources in the result set.

## Marvel.getStoriesByCharacter
Fetches lists of stories containing a specific character, with optional filters.

| Field        | Type       | Description
|--------------|------------|----------
| publicKey    | credentials| Public api key obtained from Marvel
| privateKey   | credentials| Private api key obtained from Marvel
| characterId  | Number     | A single character id.
| modifiedSince| String     | Return only stories which have been modified since the specified date.
| creators     | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| comics       | Array      | Return only stories contained in the specified (accepts an array of ids).
| events       | Array      | Return only stories which take place during the specified events (accepts an array of ids).
| series       | Array      | Return only stories contained the specified series (accepts an array of ids).
| orderBy      | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: id, modified
| limit        | Number     | Limit the result set to the specified number of resources.
| offset       | Number     | Skip the specified number of resources in the result set.

## Marvel.getComics
Fetches lists of comics with optional filters.

| Field            | Type       | Description
|------------------|------------|----------
| publicKey        | credentials| Public api key obtained from Marvel
| privateKey       | credentials| Private api key obtained from Marvel
| format           | String     | Filter by the issue format (e.g. comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| formatType       | String     | Filter by the issue format type (comic or collection).
| noVariants       | Boolean    | Exclude variant comics from the result set.
| dateDescriptor   | String     | Return comics within a predefined date range. Values: lastWeek, thisWeek, nextWeek, thisMonth
| dateRange        | Array      | Return comics within a predefined date range. Dates must be specified as array. Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
| title            | String     | Return only issues in series whose title matches the input.
| titleStartsWith  | String     | Return only issues in series whose title starts with the input.
| startYear        | String     | Return only issues in series whose start year matches the input.
| issueNumber      | String     | Return only issues in series whose issue number matches the input.
| diamondCode      | String     | Filter by diamond code.
| digitalId        | Number     | Filter by digital comic id.
| upc              | String     | Filter by UPC.
| isbn             | String     | Filter by ISBN.
| ean              | String     | Filter by EAN.
| issn             | String     | Filter by ISSN.
| hasDigitalIssue  | Boolean    | Include only results which are available digitally.
| modifiedSince    | String     | Return only comics which have been modified since the specified date.
| creators         | Array      | Return only comics which feature work by the specified creators (accepts an array of ids).
| characters       | Array      | Return only comics which feature the specified characters (accepts an array of ids).
| series           | Array      | Return only comics which are part of the specified series (accepts an array of ids).
| events           | Array      | Return only comics which take place in the specified events (accepts an array of ids).
| stories          | Array      | Return only comics which contain the specified stories (accepts an array of ids).
| sharedAppearances| String     | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear).
| collaborators    | String     | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work).
| orderBy          | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: focDate, onsaleDate, title, issueNumber, modified
| limit            | Number     | Limit the result set to the specified number of resources.
| offset           | Number     | Skip the specified number of resources in the result set.

## Marvel.getSingleComic
This method fetches a single comic resource. It is the canonical URI for any comic resource provided by the API.

| Field     | Type       | Description
|-----------|------------|----------
| publicKey | credentials| Public api key obtained from Marvel
| privateKey| credentials| Private api key obtained from Marvel
| comicId   | Number     | A single comic id.

## Marvel.getCharactersByComic
Fetches lists of characters which appear in a specific comic with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| comicId       | Number     | A single comic id.
| name          | String     | Return only characters matching the specified full character name (e.g. Spider-Man).
| nameStartsWith| String     | Return characters with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only characters which have been modified since the specified date.
| series        | Array      | Return only characters which appear the specified series (accepts an array of ids).
| events        | Array      | Return only characters which appear comics that took place in the specified events (accepts an array of ids).
| stories       | Array      | Return only characters which appear the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getCreatorsByComic
Fetches lists of comic creators whose work appears in a specific comic, with optional filters.

| Field               | Type       | Description
|---------------------|------------|----------
| publicKey           | credentials| Public api key obtained from Marvel
| privateKey          | credentials| Private api key obtained from Marvel
| comicId             | Number     | A single comic id.
| firstName           | String     | Filter by creator first name (e.g. brian).
| middleName          | String     | Filter by creator middle name (e.g. Michael).
| lastName            | String     | Filter by creator last name (e.g. Bendis).
| suffix              | String     | Filter by suffix or honorific (e.g. Jr., Sr.).
| nameStartsWith      | String     | Filter by creator names that match critera (e.g. B, St L).
| firstNameStartsWith | String     | Filter by creator first names that match critera (e.g. B, St L).
| middleNameStartsWith| String     | Filter by creator middle names that match critera (e.g. Mi).
| lastNameStartsWith  | String     | Filter by creator last names that match critera (e.g. Ben).
| modifiedSince       | String     | Return only creators which have been modified since the specified date.
| series              | Array      | Return only creators who worked on in the specified series (accepts an array of ids).
| comics              | Array      | Return only creators who worked on in the specified comics (accepts an array of ids).
| stories             | Array      | Return only creators who worked on in the specified stories (accepts an array of ids).
| orderBy             | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: lastName, firstName, middleName, suffix, modified
| limit               | Number     | Limit the result set to the specified number of resources.
| offset              | Number     | Skip the specified number of resources in the result set.

## Marvel.getEventsByComic
Fetches lists of events in which a specific comic appears, with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| comicId       | Number     | A single comic id.
| name          | String     | Filter the event list by name.
| nameStartsWith| String     | Return events with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only events which have been modified since the specified date.
| creators      | Array      | Return only events which feature work by the specified creators (accepts an array of ids).
| series        | Array      | Return only events which are part of the specified series (accepts an array of ids).
| characters    | Array      | Return only events which feature the specified characters (accepts an array of ids).
| stories       | Array      | Return only events which contain the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, startDate, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getStoriesByComic
Fetches lists of comic stories in a specific comic issue, with optional filters.

| Field        | Type       | Description
|--------------|------------|----------
| publicKey    | credentials| Public api key obtained from Marvel
| privateKey   | credentials| Private api key obtained from Marvel
| comicId      | Number     | A single comic id.
| modifiedSince| String     | Return only stories which have been modified since the specified date.
| creators     | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| characters   | Array      | Return only stories which feature the specified characters (accepts an array of ids).
| events       | Array      | Return only stories which take place during the specified events (accepts an array of ids).
| series       | Array      | Return only stories contained the specified series (accepts an array of ids).
| orderBy      | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: id, modified
| limit        | Number     | Limit the result set to the specified number of resources.
| offset       | Number     | Skip the specified number of resources in the result set.

## Marvel.getCreators
Fetches lists of comic creators with optional filters.

| Field               | Type       | Description
|---------------------|------------|----------
| publicKey           | credentials| Public api key obtained from Marvel
| privateKey          | credentials| Private api key obtained from Marvel
| firstName           | String     | Filter by creator first name (e.g. brian).
| middleName          | String     | Filter by creator middle name (e.g. Michael).
| lastName            | String     | Filter by creator last name (e.g. Bendis).
| suffix              | String     | Filter by suffix or honorific (e.g. Jr., Sr.).
| nameStartsWith      | String     | Filter by creator names that match critera (e.g. B, St L).
| firstNameStartsWith | String     | Filter by creator first names that match critera (e.g. B, St L).
| middleNameStartsWith| String     | Filter by creator middle names that match critera (e.g. Mi).
| lastNameStartsWith  | String     | Filter by creator last names that match critera (e.g. Ben).
| modifiedSince       | String     | Return only creators which have been modified since the specified date.
| series              | Array      | Return only creators who worked on in the specified series (accepts an array of ids).
| events              | Array      | Return only creators who worked on comics that took place in the specified events (accepts an array of ids).
| comics              | Array      | Return only creators who worked on in the specified comics (accepts an array of ids).
| stories             | Array      | Return only creators who worked on in the specified stories (accepts an array of ids).
| orderBy             | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: lastName, firstName, middleName, suffix, modified
| limit               | Number     | Limit the result set to the specified number of resources.
| offset              | Number     | Skip the specified number of resources in the result set.

## Marvel.getSingleCreator
This method fetches a single creator resource. It is the canonical URI for any creator resource provided by the API.

| Field     | Type       | Description
|-----------|------------|----------
| publicKey | credentials| Public api key obtained from Marvel
| privateKey| credentials| Private api key obtained from Marvel
| creatorId | Number     | ID of the creator

## Marvel.getComicsByCreator
Fetches lists of comics in which the work of a specific creator appears, with optional filters.

| Field            | Type       | Description
|------------------|------------|----------
| publicKey        | credentials| Public api key obtained from Marvel
| privateKey       | credentials| Private api key obtained from Marvel
| creatorId        | Number     | Creator id.
| format           | String     | Filter by the issue format (e.g. comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| formatType       | String     | Filter by the issue format type (comic or collection).
| noVariants       | Boolean    | Exclude variant comics from the result set.
| dateDescriptor   | String     | Return comics within a predefined date range. Values: lastWeek, thisWeek, nextWeek, thisMonth
| dateRange        | Array      | Return comics within a predefined date range. Dates must be specified as array. Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
| title            | String     | Return only issues in series whose title matches the input.
| titleStartsWith  | String     | Return only issues in series whose title starts with the input.
| startYear        | String     | Return only issues in series whose start year matches the input.
| issueNumber      | String     | Return only issues in series whose issue number matches the input.
| diamondCode      | String     | Filter by diamond code.
| digitalId        | Number     | Filter by digital comic id.
| upc              | String     | Filter by UPC.
| isbn             | String     | Filter by ISBN.
| ean              | String     | Filter by EAN.
| issn             | String     | Filter by ISSN.
| hasDigitalIssue  | Boolean    | Include only results which are available digitally.
| modifiedSince    | String     | Return only comics which have been modified since the specified date.
| characters       | Array      | Return only comics which feature the specified characters (accepts an array of ids).
| series           | Array      | Return only comics which are part of the specified series (accepts an array of ids).
| events           | Array      | Return only comics which take place in the specified events (accepts an array of ids).
| stories          | Array      | Return only comics which contain the specified stories (accepts an array of ids).
| sharedAppearances| String     | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear).
| collaborators    | String     | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work).
| orderBy          | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: focDate, onsaleDate, title, issueNumber, modified
| limit            | Number     | Limit the result set to the specified number of resources.
| offset           | Number     | Skip the specified number of resources in the result set.

## Marvel.getEventsByCreator
Fetches lists of events featuring the work of a specific creator with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| creatorId     | Number     | Creator id.
| name          | String     | Filter the event list by name.
| nameStartsWith| String     | Return events with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only events which have been modified since the specified date.
| comics        | Array      | Return only events which take place in the specified comics (accepts an array of ids).
| series        | Array      | Return only events which are part of the specified series (accepts an array of ids).
| characters    | Array      | Return only events which feature the specified characters (accepts an array of ids).
| stories       | Array      | Return only events which contain the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, startDate, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getSeriesByCreator
Fetches lists of comic series in which a specific creator's work appears, with optional filters.

| Field          | Type       | Description
|----------------|------------|----------
| publicKey      | credentials| Public api key obtained from Marvel
| privateKey     | credentials| Private api key obtained from Marvel
| creatorId      | Number     | Creator id.
| title          | String     | Return only issues in series whose title matches the input.
| titleStartsWith| String     | Return only issues in series whose title starts with the input.
| startYear      | String     | Return only issues in series whose start year matches the input.
| modifiedSince  | String     | Return only series which have been modified since the specified date.
| characters     | Array      | Return only series which feature the specified characters (accepts an array of ids).
| comics         | Array      | Return only series which contain the specified comics (accepts an array of ids).
| events         | Array      | Return only series which have comics that take place during the specified events (accepts an array of ids).
| stories        | Array      | Return only series which contain the specified stories (accepts an array of ids).
| seriesType     | String     | Filter the series by publication frequency type. Values: collection, one shot, limited, ongoing
| contains       | String     | Return only series containing one or more comics with the specified format. Values: comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| orderBy        | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: title, startYear, modified
| limit          | Number     | Limit the result set to the specified number of resources.
| offset         | Number     | Skip the specified number of resources in the result set.

## Marvel.getStoriesByCreator
Fetches lists of comic stories by a specific creator with optional filters.

| Field        | Type       | Description
|--------------|------------|----------
| publicKey    | credentials| Public api key obtained from Marvel
| privateKey   | credentials| Private api key obtained from Marvel
| creatorId    | Number     | Creator id.
| modifiedSince| String     | Return only stories which have been modified since the specified date.
| comics       | Array      | Return only stories contained in the specified comics (accepts an array of ids).
| characters   | Array      | Return only stories which feature the specified characters (accepts an array of ids).
| events       | Array      | Return only stories which take place during the specified events (accepts an array of ids).
| series       | Array      | Return only stories contained the specified series (accepts an array of ids).
| orderBy      | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: id, modified
| limit        | Number     | Limit the result set to the specified number of resources.
| offset       | Number     | Skip the specified number of resources in the result set.

## Marvel.getEvents
Fetches lists of events with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| name          | String     | Filter the event list by name.
| nameStartsWith| String     | Return events with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only events which have been modified since the specified date.
| creators      | Array      | Return only events which feature work by the specified creators (accepts an array of ids).
| series        | Array      | Return only events which are part of the specified series (accepts an array of ids).
| characters    | Array      | Return only events which feature the specified characters (accepts an array of ids).
| comics        | Array      | Return only events which take place in the specified comics (accepts an array of ids).
| stories       | Array      | Return only events which contain the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, startDate, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getSingleEvent
This method fetches a single event resource. It is the canonical URI for any event resource provided by the API.

| Field     | Type       | Description
|-----------|------------|----------
| publicKey | credentials| Public api key obtained from Marvel
| privateKey| credentials| Private api key obtained from Marvel
| eventId   | Number     | ID of the event

## Marvel.getCharactersByEvent
Fetches lists of characters which appear in a specific event, with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| eventId       | Number     | A single event id.
| name          | String     | Return only characters matching the specified full character name (e.g. Spider-Man).
| nameStartsWith| String     | Return characters with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only characters which have been modified since the specified date.
| series        | Array      | Return only characters which appear the specified series (accepts an array of ids).
| comics        | Array      | Return only characters which appear in the specified comics (accepts an array of ids).
| stories       | Array      | Return only characters which appear the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getComicsByEvent
Fetches lists of comics which take place during a specific event, with optional filters.

| Field            | Type       | Description
|------------------|------------|----------
| publicKey        | credentials| Public api key obtained from Marvel
| privateKey       | credentials| Private api key obtained from Marvel
| eventId          | Number     | Event id.
| format           | String     | Filter by the issue format (e.g. comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| formatType       | String     | Filter by the issue format type (comic or collection).
| noVariants       | Boolean    | Exclude variant comics from the result set.
| dateDescriptor   | String     | Return comics within a predefined date range. Values: lastWeek, thisWeek, nextWeek, thisMonth
| dateRange        | Array      | Return comics within a predefined date range. Dates must be specified as array. Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
| title            | String     | Return only issues in series whose title matches the input.
| titleStartsWith  | String     | Return only issues in series whose title starts with the input.
| startYear        | String     | Return only issues in series whose start year matches the input.
| issueNumber      | String     | Return only issues in series whose issue number matches the input.
| diamondCode      | String     | Filter by diamond code.
| digitalId        | Number     | Filter by digital comic id.
| upc              | String     | Filter by UPC.
| isbn             | String     | Filter by ISBN.
| ean              | String     | Filter by EAN.
| issn             | String     | Filter by ISSN.
| hasDigitalIssue  | Boolean    | Include only results which are available digitally.
| modifiedSince    | String     | Return only comics which have been modified since the specified date.
| creators         | Array      | Return only comics which feature work by the specified creators (accepts an array of ids).
| characters       | Array      | Return only comics which feature the specified characters (accepts an array of ids).
| series           | Array      | Return only comics which are part of the specified series (accepts an array of ids).
| events           | Array      | Return only comics which take place in the specified events (accepts an array of ids).
| stories          | Array      | Return only comics which contain the specified stories (accepts an array of ids).
| sharedAppearances| String     | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear).
| collaborators    | String     | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work).
| orderBy          | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: focDate, onsaleDate, title, issueNumber, modified
| limit            | Number     | Limit the result set to the specified number of resources.
| offset           | Number     | Skip the specified number of resources in the result set.

## Marvel.getCreatorsByEvent
Fetches lists of comic creators whose work appears in a specific event, with optional filters.

| Field               | Type       | Description
|---------------------|------------|----------
| publicKey           | credentials| Public api key obtained from Marvel
| privateKey          | credentials| Private api key obtained from Marvel
| eventId             | Number     | A single event id.
| firstName           | String     | Filter by creator first name (e.g. brian).
| middleName          | String     | Filter by creator middle name (e.g. Michael).
| lastName            | String     | Filter by creator last name (e.g. Bendis).
| suffix              | String     | Filter by suffix or honorific (e.g. Jr., Sr.).
| nameStartsWith      | String     | Filter by creator names that match critera (e.g. B, St L).
| firstNameStartsWith | String     | Filter by creator first names that match critera (e.g. B, St L).
| middleNameStartsWith| String     | Filter by creator middle names that match critera (e.g. Mi).
| lastNameStartsWith  | String     | Filter by creator last names that match critera (e.g. Ben).
| modifiedSince       | String     | Return only creators which have been modified since the specified date.
| series              | Array      | Return only creators who worked on in the specified series (accepts an array of ids).
| comics              | Array      | Return only creators who worked on in the specified comics (accepts an array of ids).
| stories             | Array      | Return only creators who worked on in the specified stories (accepts an array of ids).
| orderBy             | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: lastName, firstName, middleName, suffix, modified
| limit               | Number     | Limit the result set to the specified number of resources.
| offset              | Number     | Skip the specified number of resources in the result set.

## Marvel.getSeriesByEvent
Fetches lists of comic series in which a specific event takes place, with optional filters.

| Field          | Type       | Description
|----------------|------------|----------
| publicKey      | credentials| Public api key obtained from Marvel
| privateKey     | credentials| Private api key obtained from Marvel
| eventId        | Number     | A single event id.
| title          | String     | Return only issues in series whose title matches the input.
| titleStartsWith| String     | Return only issues in series whose title starts with the input.
| startYear      | String     | Return only issues in series whose start year matches the input.
| modifiedSince  | String     | Return only series which have been modified since the specified date.
| creators       | Array      | Return only series which feature work by the specified creators (accepts an array of ids).
| comics         | Array      | Return only series which contain the specified comics (accepts an array of ids).
| characters     | Array      | Return only series which feature the specified characters (accepts an array of ids).
| stories        | Array      | Return only series which contain the specified stories (accepts an array of ids).
| seriesType     | String     | Filter the series by publication frequency type. Values: collection, one shot, limited, ongoing
| contains       | String     | Return only series containing one or more comics with the specified format. Values: comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| orderBy        | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: title, startYear, modified
| limit          | Number     | Limit the result set to the specified number of resources.
| offset         | Number     | Skip the specified number of resources in the result set.

## Marvel.getStoriesByEvent
Fetches lists of comic stories from a specific event, with optional filters.

| Field        | Type       | Description
|--------------|------------|----------
| publicKey    | credentials| Public api key obtained from Marvel
| privateKey   | credentials| Private api key obtained from Marvel
| eventId      | Number     | A single event id.
| modifiedSince| String     | Return only stories which have been modified since the specified date.
| creators     | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| comics       | Array      | Return only stories contained in the specified (accepts an array of ids).
| characters   | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| series       | Array      | Return only stories contained the specified series (accepts an array of ids).
| orderBy      | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: id, modified
| limit        | Number     | Limit the result set to the specified number of resources.
| offset       | Number     | Skip the specified number of resources in the result set.

## Marvel.getSeries
Fetches lists of comic series with optional filters.

| Field          | Type       | Description
|----------------|------------|----------
| publicKey      | credentials| Public api key obtained from Marvel
| privateKey     | credentials| Private api key obtained from Marvel
| title          | String     | Return only issues in series whose title matches the input.
| titleStartsWith| String     | Return only issues in series whose title starts with the input.
| startYear      | String     | Return only issues in series whose start year matches the input.
| modifiedSince  | String     | Return only series which have been modified since the specified date.
| characters     | Array      | Return only series which feature the specified characters (accepts an array of ids).
| creators       | Array      | Return only series which feature work by the specified creators (accepts an array of ids).
| comics         | Array      | Return only series which contain the specified comics (accepts an array of ids).
| events         | Array      | Return only series which have comics that take place during the specified events (accepts an array of ids).
| stories        | Array      | Return only series which contain the specified stories (accepts an array of ids).
| seriesType     | String     | Filter the series by publication frequency type. Values: collection, one shot, limited, ongoing
| contains       | String     | Return only series containing one or more comics with the specified format. Values: comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| orderBy        | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: title, startYear, modified
| limit          | Number     | Limit the result set to the specified number of resources.
| offset         | Number     | Skip the specified number of resources in the result set.

# Marvel.getSingleSeries
This method fetches a single comic series resource. It is the canonical URI for any comic story resource provided by the API.

| Field     | Type       | Description
|-----------|------------|----------
| publicKey | credentials| Public api key obtained from Marvel
| privateKey| credentials| Private api key obtained from Marvel
| seriesId  | Number     | ID of the series


## Marvel.getCharactersBySeries
Fetches lists of characters which appear in specific series, with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| seriesId      | Number     | A single series id.
| name          | String     | Return only characters matching the specified full character name (e.g. Spider-Man).
| nameStartsWith| String     | Return characters with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only characters which have been modified since the specified date.
| comics        | Array      | Return only characters which appear in the specified comics (accepts an array of ids).
| events        | Array      | Return only characters which appear comics that took place in the specified events (accepts an array of ids).
| stories       | Array      | Return only characters which appear the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getComicsBySeries
Fetches lists of comics which are published as part of a specific series, with optional filters.

| Field            | Type       | Description
|------------------|------------|----------
| publicKey        | credentials| Public api key obtained from Marvel
| privateKey       | credentials| Private api key obtained from Marvel
| seriesId         | Number     | A single series id.
| format           | String     | Filter by the issue format (e.g. comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| formatType       | String     | Filter by the issue format type (comic or collection).
| noVariants       | Boolean    | Exclude variant comics from the result set.
| dateDescriptor   | String     | Return comics within a predefined date range. Values: lastWeek, thisWeek, nextWeek, thisMonth
| dateRange        | Array      | Return comics within a predefined date range. Dates must be specified as array. Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
| title            | String     | Return only issues in series whose title matches the input.
| titleStartsWith  | String     | Return only issues in series whose title starts with the input.
| startYear        | String     | Return only issues in series whose start year matches the input.
| issueNumber      | String     | Return only issues in series whose issue number matches the input.
| diamondCode      | String     | Filter by diamond code.
| digitalId        | Number     | Filter by digital comic id.
| upc              | String     | Filter by UPC.
| isbn             | String     | Filter by ISBN.
| ean              | String     | Filter by EAN.
| issn             | String     | Filter by ISSN.
| hasDigitalIssue  | Boolean    | Include only results which are available digitally.
| modifiedSince    | String     | Return only comics which have been modified since the specified date.
| creators         | Array      | Return only comics which feature work by the specified creators (accepts an array of ids).
| characters       | Array      | Return only comics which feature the specified characters (accepts an array of ids).
| events           | Array      | Return only comics which take place in the specified events (accepts an array of ids).
| stories          | Array      | Return only comics which contain the specified stories (accepts an array of ids).
| sharedAppearances| String     | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear).
| collaborators    | String     | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work).
| orderBy          | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: focDate, onsaleDate, title, issueNumber, modified
| limit            | Number     | Limit the result set to the specified number of resources.
| offset           | Number     | Skip the specified number of resources in the result set.

## Marvel.getCreatorsBySeries
Fetches lists of comic creators whose work appears in a specific series, with optional filters. 

| Field               | Type       | Description
|---------------------|------------|----------
| publicKey           | credentials| Public api key obtained from Marvel
| privateKey          | credentials| Private api key obtained from Marvel
| seriesId            | Number     | A single series id.
| firstName           | String     | Filter by creator first name (e.g. brian).
| middleName          | String     | Filter by creator middle name (e.g. Michael).
| lastName            | String     | Filter by creator last name (e.g. Bendis).
| suffix              | String     | Filter by suffix or honorific (e.g. Jr., Sr.).
| nameStartsWith      | String     | Filter by creator names that match critera (e.g. B, St L).
| firstNameStartsWith | String     | Filter by creator first names that match critera (e.g. B, St L).
| middleNameStartsWith| String     | Filter by creator middle names that match critera (e.g. Mi).
| lastNameStartsWith  | String     | Filter by creator last names that match critera (e.g. Ben).
| modifiedSince       | String     | Return only creators which have been modified since the specified date.
| events              | Array      | Return only creators who worked on comics that took place in the specified events (accepts an array of ids).
| comics              | Array      | Return only creators who worked on in the specified comics (accepts an array of ids).
| stories             | Array      | Return only creators who worked on in the specified stories (accepts an array of ids).
| orderBy             | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: lastName, firstName, middleName, suffix, modified
| limit               | Number     | Limit the result set to the specified number of resources.
| offset              | Number     | Skip the specified number of resources in the result set.

## Marvel.getEventsBySeries
Fetches lists of events which occur in a specific series, with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| seriesId      | Number     | A single series id.
| name          | String     | Filter the event list by name.
| nameStartsWith| String     | Return events with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only events which have been modified since the specified date.
| creators      | Array      | Return only events which feature work by the specified creators (accepts an array of ids).
| characters    | Array      | Return only events which feature the specified characters (accepts an array of ids).
| comics        | Array      | Return only events which take place in the specified comics (accepts an array of ids).
| stories       | Array      | Return only events which contain the specified stories (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, startDate modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getStoriesBySeries
Fetches lists of comic stories from a specific event, with optional filters.

| Field        | Type       | Description
|--------------|------------|----------
| publicKey    | credentials| Public api key obtained from Marvel
| privateKey   | credentials| Private api key obtained from Marvel
| seriesId     | Number     | A single series id.
| modifiedSince| String     | Return only stories which have been modified since the specified date.
| creators     | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| comics       | Array      | Return only stories contained in the specified (accepts an array of ids).
| characters   | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| events       | Array      | Return only stories which take place during the specified events (accepts an array of ids).
| orderBy      | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: id, modified
| limit        | Number     | Limit the result set to the specified number of resources.
| offset       | Number     | Skip the specified number of resources in the result set.

## Marvel.getStories
Fetches lists of comic stories with optional filters.

| Field        | Type       | Description
|--------------|------------|----------
| publicKey    | credentials| Public api key obtained from Marvel
| privateKey   | credentials| Private api key obtained from Marvel
| modifiedSince| String     | Return only stories which have been modified since the specified date.
| creators     | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| comics       | Array      | Return only stories contained in the specified (accepts an array of ids).
| series       | Array      | Return only stories contained the specified series (accepts an array of ids).
| characters   | Array      | Return only stories which feature work by the specified creators (accepts an array of ids).
| events       | Array      | Return only stories which take place during the specified events (accepts an array of ids).
| orderBy      | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: id, modified
| limit        | Number     | Limit the result set to the specified number of resources.
| offset       | Number     | Skip the specified number of resources in the result set.

## Marvel.getSingleStory
This method fetches a single comic story resource. It is the canonical URI for any comic story resource provided by the API.

| Field     | Type       | Description
|-----------|------------|----------
| publicKey | credentials| Public api key obtained from Marvel
| privateKey| credentials| Private api key obtained from Marvel
| storyId   | Number     | Id of the story

## Marvel.getCharactersByStory
Fetches lists of comic characters appearing in a single story, with optional filters. 

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| storyId       | Number     | A single story id.
| name          | String     | Return only characters matching the specified full character name (e.g. Spider-Man).
| nameStartsWith| String     | Return characters with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only characters which have been modified since the specified date.
| comics        | Array      | Return only characters which appear in the specified comics (accepts an array of ids).
| events        | Array      | Return only characters which appear comics that took place in the specified events (accepts an array of ids).
| series        | Array      | Return only characters which appear the specified series (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getComicsByStory
Fetches lists of comic characters appearing in a single story, with optional filters.

| Field            | Type       | Description
|------------------|------------|----------
| publicKey        | credentials| Public api key obtained from Marvel
| privateKey       | credentials| Private api key obtained from Marvel
| storyId          | Number     | A single story id.
| format           | String     | Filter by the issue format (e.g. comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| formatType       | String     | Filter by the issue format type (comic or collection).
| noVariants       | Boolean    | Exclude variant comics from the result set.
| dateDescriptor   | String     | Return comics within a predefined date range. Values: lastWeek, thisWeek, nextWeek, thisMonth
| dateRange        | Array      | Return comics within a predefined date range. Dates must be specified as array. Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
| title            | String     | Return only issues in series whose title matches the input.
| titleStartsWith  | String     | Return only issues in series whose title starts with the input.
| startYear        | String     | Return only issues in series whose start year matches the input.
| issueNumber      | String     | Return only issues in series whose issue number matches the input.
| diamondCode      | String     | Filter by diamond code.
| digitalId        | Number     | Filter by digital comic id.
| upc              | String     | Filter by UPC.
| isbn             | String     | Filter by ISBN.
| ean              | String     | Filter by EAN.
| issn             | String     | Filter by ISSN.
| hasDigitalIssue  | Boolean    | Include only results which are available digitally.
| modifiedSince    | String     | Return only comics which have been modified since the specified date.
| creators         | Array      | Return only comics which feature work by the specified creators (accepts an array of ids).
| characters       | Array      | Return only comics which feature the specified characters (accepts an array of ids).
| events           | Array      | Return only comics which take place in the specified events (accepts an array of ids).
| series           | Array      | Return only characters which appear the specified series (accepts an array of ids).
| sharedAppearances| String     | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear).
| collaborators    | String     | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work).
| orderBy          | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: focDate, onsaleDate, title, issueNumber, modified
| limit            | Number     | Limit the result set to the specified number of resources.
| offset           | Number     | Skip the specified number of resources in the result set.

## Marvel.getCreatorsByStory
Fetches lists of comic creators whose work appears in a specific story, with optional filters.

| Field               | Type       | Description
|---------------------|------------|----------
| publicKey           | credentials| Public api key obtained from Marvel
| privateKey          | credentials| Private api key obtained from Marvel
| storyId             | Number     | A single story id.
| firstName           | String     | Filter by creator first name (e.g. brian).
| middleName          | String     | Filter by creator middle name (e.g. Michael).
| lastName            | String     | Filter by creator last name (e.g. Bendis).
| suffix              | String     | Filter by suffix or honorific (e.g. Jr., Sr.).
| nameStartsWith      | String     | Filter by creator names that match critera (e.g. B, St L).
| firstNameStartsWith | String     | Filter by creator first names that match critera (e.g. B, St L).
| middleNameStartsWith| String     | Filter by creator middle names that match critera (e.g. Mi).
| lastNameStartsWith  | String     | Filter by creator last names that match critera (e.g. Ben).
| modifiedSince       | String     | Return only creators which have been modified since the specified date.
| events              | Array      | Return only creators who worked on comics that took place in the specified events (accepts an array of ids).
| comics              | Array      | Return only creators who worked on in the specified comics (accepts an array of ids).
| series              | Array      | Return only creators who worked on the specified series (accepts an array of ids).
| orderBy             | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: lastName, firstName, middleName, suffix, modified
| limit               | Number     | Limit the result set to the specified number of resources.
| offset              | Number     | Skip the specified number of resources in the result set.

## Marvel.getEventsByStory
Fetches lists of events in which a specific story appears, with optional filters.

| Field         | Type       | Description
|---------------|------------|----------
| publicKey     | credentials| Public api key obtained from Marvel
| privateKey    | credentials| Private api key obtained from Marvel
| storyId       | Number     | A single story id.
| name          | String     | Filter the event list by name.
| nameStartsWith| String     | Return events with names that begin with the specified string (e.g. Sp).
| modifiedSince | String     | Return only events which have been modified since the specified date.
| creators      | Array      | Return only events which feature work by the specified creators (accepts an array of ids).
| characters    | Array      | Return only events which feature the specified characters (accepts an array of ids).
| comics        | Array      | Return only events which take place in the specified comics (accepts an array of ids).
| series        | Array      | Return only events which are part of the specified series (accepts an array of ids).
| orderBy       | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: name, startDate modified
| limit         | Number     | Limit the result set to the specified number of resources.
| offset        | Number     | Skip the specified number of resources in the result set.

## Marvel.getSeriesByStory
Fetches lists of comic series in which the specified story takes place.

| Field          | Type       | Description
|----------------|------------|----------
| publicKey      | credentials| Public api key obtained from Marvel
| privateKey     | credentials| Private api key obtained from Marvel
| storyId        | Number     | A single story id.
| title          | String     | Return only issues in series whose title matches the input.
| titleStartsWith| String     | Return only issues in series whose title starts with the input.
| startYear      | String     | Return only issues in series whose start year matches the input.
| modifiedSince  | String     | Return only series which have been modified since the specified date.
| creators       | Array      | Return only series which feature work by the specified creators (accepts an array of ids).
| comics         | Array      | Return only series which contain the specified comics (accepts an array of ids).
| characters     | Array      | Return only series which feature the specified characters (accepts an array of ids).
| creators       | Array      | Return only series which feature work by the specified creators (accepts an array of ids).
| seriesType     | String     | Filter the series by publication frequency type. Values: collection, one shot, limited, ongoing
| contains       | String     | Return only series containing one or more comics with the specified format. Values: comic, digital comic, hardcover, magazine, trade paperback, digest, graphic novel, infinite comic).
| orderBy        | String     | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. Values: title, startYear, modified
| limit          | Number     | Limit the result set to the specified number of resources.
| offset         | Number     | Skip the specified number of resources in the result set.

